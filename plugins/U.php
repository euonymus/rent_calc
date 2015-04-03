<?
// Component defined in 'ContactManager' plugin
namespace U;

/**
 *  General library. It's usable anywhere.
 */
class U extends Object {
  public static function arrPrepared($needle, $data) {
    return (is_array($data) && array_key_exists($needle, $data));
  }

  // return: emptyの時return true.  not emptyかexceptionの時return false.
  public static function isEmpty($needle, $data) {
    //return (!is_array($data) || !isset($data[$needle]) || (($data[$needle] !== 0) && empty($data[$needle])));
    return (is_array($data) 
	    && (!array_key_exists($needle, $data) || (($data[$needle] !== 0) && empty($data[$needle]))));
  }
  // return: not emptyの時return true.  emptyかexceptionの時return false.
  public static function notEmpty($needle, $data) {
    // MEMO: Should not be like this -> return !self::isEmpty($needle,$data);
    return (is_array($data) && array_key_exists($needle, $data) && (($data[$needle] === 0) || !empty($data[$needle])));
  }
  // return: emptyかexceptionの時return true.  not emptyの時return false.
  public static function notPrepared($needle, $data) {
    // MEMO: Should not be like this -> return !self::notEmpty($needle, $data);
    return (!is_array($data) || !array_key_exists($needle, $data)
	    || (($data[$needle] !== 0) && ($data[$needle] !== false) && empty($data[$needle])));
  }

  /****************************************************************************/
  /* Treat String                                                             */
  /****************************************************************************/
  public static function trimSpace($str) {
    if (!is_string($str)) return '';

    // MEMO: pregに渡せる文字列には限界があり、下記パターンの正規表現にたいしては、14155が限界値。
    // 　　　これより長い値を渡すとセグメンテーションフォルトとなってしまう。
    if (strlen($str) > 14155) return $str;
    // MEMO: (?:.|\n)は改行を含む全ての文字列。因に、\rは.に含まれる。
    //    return preg_replace('/^[ 　\r\n]*(.*?)[ 　\r\n]*$/u', '$1', $str);
    return preg_replace('/^[ 　\r\n]*((?:.|\n)*?)[ 　\r\n]*$/u', '$1', $str);
  }

  // Shorten the string length for showing purpose.
  public static function summary($string, $length = 120) {
    $string = strip_tags($string);
    $pos = mb_strpos($string, '。', 0, 'UTF-8');
    if ($pos && $pos < $length) {
      $content = mb_substr($string, 0, $pos+1, 'UTF-8');
    } else {
      $content = mb_strimwidth($string, 0, $length, "...", 'UTF-8');
    }
    return $content;
  }

  // UTF-8文字列をUnicodeエスケープする。ただし英数字と記号はエスケープしない。
  public static function unicode_decode($str) {
    return preg_replace_callback("/((?:[^\x09\x0A\x0D\x20-\x7E]{3})+)/", "self::decode_callback", $str);
  }
  public static function decode_callback($matches) {
    $char = mb_convert_encoding($matches[1], "UTF-16", "UTF-8");
    $escaped = "";
    for ($i = 0, $l = strlen($char); $i < $l; $i += 2) {
      $escaped .=  "\u" . sprintf("%02x%02x", ord($char[$i]), ord($char[$i+1]));
    }
    return $escaped;
  }

  // Unicodeエスケープされた文字列をUTF-8文字列に戻す
  public static function unicode_encode($str) {
    return preg_replace_callback("/\\\\u([0-9a-zA-Z]{4})/", "self::encode_callback", $str);
  }
  public static function encode_callback($matches) {
    $char = mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UTF-16");
    return $char;
  }

  /****************************************************************************/
  /* Treat Time                                                               */
  /****************************************************************************/
  public static function date($format, $time) {
    if (!is_numeric($time)) $time = strtotime($time);
    return date($format, $time);
  }

  // 起算日から日数を指定して日付を算出
  public static function detect_date($initial_date, $days, $backward = false) {
    $aDay = 60 * 60 * 24;
    $difference = $days * $aDay;
    if ($backward) $date = strtotime($initial_date) - $difference;
    else $date = strtotime($initial_date) + $difference;
    return $date;
  }

  // 起算日から終了日までの日数を算出
  public static function detect_days($initial_date, $final_date) {
    $aDay = 60 * 60 * 24;
    $subtract = strtotime($final_date) - strtotime($initial_date);
    if ($subtract < 0) $subtract = $subtract * -1;
    return floor($subtract / $aDay);
  }

  // timeから曜日を出す
  public static function week($time, $type = 'jp') {
    if ($type == 'jp') $week = array('日','月','火','水','木','金','土');
    else $week = array('Sun','Mon','Tue','Wed','Thr','Fri','Sat');
    $w = date('w', $time);
    return $week[$w];
  }

  public static function nextMonth($month) {
    if (!is_numeric($month)) return false;
    return ($month == 12) ? 1 : ($month + 1);
  }
  public static function lastMonth($month) {
    if (!is_numeric($month)) return false;
    return ($month == 1) ? 12 : ($month - 1);
  }

  public static function daysInMonth($month = false, $year = false) {
    if (!$year) $year = date('Y', time());
    if (!$month) $month = date('m', time());
    $lastDay = date("t", mktime(0, 0, 0, $month, 1, $year));
    $ret = array();
    for($day = 1; $day <= $lastDay; $day++) {
      $ret[] = sprintf('%4d-%02d-%02d', $year, $month, $day);
    }
    return $ret;
  }

  public static function day1($month = false, $year = false) {
    if (!$year) $year = date('Y', time());
    if (!$month) $month = date('m', time());
    return sprintf('%4d-%02d-01', $year, $month);
  }

  /****************************************************************************/
  /* Treat Numeric                                                            */
  /****************************************************************************/
  const ROUNDING_FLOOR = 0;
  const ROUNDING_CEIL  = 1;
  const ROUNDING_AVERG = 2;
  static $roundingList = array(
    self::ROUNDING_FLOOR => '切り捨て',
    self::ROUNDING_CEIL  => '切り上げ',
    self::ROUNDING_AVERG => '四捨五入',
  );
  public static function rounding($num, $rounding) {
    if ($rounding == self::ROUNDING_FLOOR) {
      return floor($num);
    } elseif ($rounding == self::ROUNDING_CEIL) {
      return ceil($num);
    } elseif ($rounding == self::ROUNDING_AVERG) {
      return round($num, 0);
    }
    return false;
  }

  /****************************************************************************/
  /* Treat Currency                                                           */
  /****************************************************************************/
  public static function exchangeCurrency($amount, $rate, $roundup = false) {
    $ret = $amount * $rate;
    return $roundup ? ceil($ret) : $ret;
  }
}
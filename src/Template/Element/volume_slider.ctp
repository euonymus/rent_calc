<? $this->Html->script('bootstrap-slider.js', array('block' => true)) ?>
<? $this->Html->css('slider.css', array('block' => true)) ?>
<? $this->Html->css('volume-slider.css', array('block' => true)) ?>
<?

?>

<? $this->Html->scriptStart(['block' => true]) ?>
  $(function(){
        var <?= $callback ?> = function() {
	  //          $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
        };

        var r = $('#<?= $inputId ?>').slider()
                .on('slide', <?= $callback ?>)
                .data('slider');

  });
<? $this->Html->scriptEnd() ?>


<input type="text" class="span2" value=""
    id="<?= $inputId ?>"
    data-slider-id="RC"
    data-slider-min="0"
    data-slider-max="3"
    data-slider-step="0.5"
    data-slider-value="1"
    data-slider-tooltip="hide"
    data-slider-handle="square"
>


<? /*
            <p>
            <b>G</b> <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" >
            </p>
            <p>
            <b>B</b> <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" >
            </p>
*/ ?>

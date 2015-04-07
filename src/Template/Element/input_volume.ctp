<? $this->Html->script('bootstrap-slider.js', array('block' => true)) ?>

<label><?= $inputName ?></label>
<div class="row volume-slider-set">
    <div class="col-xs-3">
        <?= $this->Form->input($inputName, array('label' => false, 'class' => 'volume-slider-input')) ?>
    </div>
    <div class="col-xs-9">
        <?= $this->element('volume_slider', array('callback' => 'hage')) ?>
    </div>
</div>


<? $this->Html->scriptStart(['block' => true]) ?>
var rentSlider = (function(exports) {


    /* exports.setData = function(data) { */
    /*   aaa = $(data).val(); */
    /*   alert(aaa); */

    /*   /\* $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')') *\/ */
    /*   /\* alert(1); *\/ */
    /* }; */
    exports.initInputVolume = function() {
	// Bind handler to numeric inputs
	$(".volume-slider").each(function(){
            $(this).slider().bind('slide', function(e) {
		var num = $(this).data('slider').getValue();
                $(this).closest(".volume-slider-set").find('.volume-slider-input').val(num);
	    }).data('slider');
	});
	// Initialize comma-separated-input-text from the hidden field.
	$(".volume-slider").each(function(){
	    var num = $(this).data('slider').getValue();
            $(this).closest(".volume-slider-set").find('.volume-slider-input').val(num);
	});
    };

    return exports;
})({});
$(function(){
    rentSlider.initInputVolume();
});
<? $this->Html->scriptEnd() ?>

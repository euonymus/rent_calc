<label><?= $inputName ?></label>
<div class="row">
    <div class="col-xs-3">
        <?= $this->Form->input($inputName, array('label' => false)) ?>
    </div>
    <div class="col-xs-9">
        <?= $this->element('volume_slider', array('inputId' => $inputName . 'Volume', 'callback' => 'hage')) ?>
    </div>
</div>

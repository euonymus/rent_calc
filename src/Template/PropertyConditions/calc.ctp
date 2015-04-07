<div class="propertyConditions form col-md-12 columns">
    <?= $this->Form->create($propertyCondition); ?>
    <fieldset>
        <legend><?= __('Rent Calculation') ?></legend>

        <div class="row">
            <div class="col-xs-6">
                <?= $this->Form->input('rent') ?>
            </div>
            <div class="col-xs-6">
                <?= $this->Form->input('common_fee') ?>
            </div>
        </div>

        <?= $this->element('input_volume', array('inputName' => 'deposit')) ?>
        <?= $this->element('input_volume', array('inputName' => 'thanx_fee')) ?>
        <?= $this->element('input_volume', array('inputName' => 'initial_guarantee_charge')) ?>
        <?= $this->element('input_volume', array('inputName' => 'broker_commission')) ?>
        <?= $this->element('input_volume', array('inputName' => 'free_rent')) ?>

        <?= $this->Form->input('key_replacement_cost') ?>
        <?= $this->Form->input('insurance_fee') ?>

        <?= $this->Form->input('annual_guarantee_charge') ?>
        <?= $this->element('input_volume', array('inputName' => 'renewal_fee')) ?>
        <?= $this->Form->input('renewal_extra_fee') ?>
<? /*
        <?= $this->Form->input('parking') ?>
        <?= $this->Form->input('bicycle') ?>
*/ ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

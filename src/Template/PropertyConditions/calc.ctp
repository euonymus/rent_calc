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

        <div class="row">
            <div class="col-xs-3">
                <?= $this->Form->input('deposit') ?>
            </div>
            <div class="col-xs-9">
                <?= $this->element('volume_slider') ?>
            </div>
        </div>
        <?= $this->Form->input('thanx_fee') ?>
        <?= $this->Form->input('initial_guarantee_charge') ?>
        <?= $this->Form->input('broker_commission') ?>
        <?= $this->Form->input('free_rent') ?>

        <?= $this->Form->input('key_replacement_cost') ?>
        <?= $this->Form->input('insurance_fee') ?>

        <?= $this->Form->input('annual_guarantee_charge') ?>
        <?= $this->Form->input('renewal_fee') ?>
        <?= $this->Form->input('renewal_extra_fee') ?>
<? /*
        <?= $this->Form->input('parking') ?>
        <?= $this->Form->input('bicycle') ?>
*/ ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

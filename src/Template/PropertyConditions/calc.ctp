<div class="propertyConditions form col-md-12 columns">
    <?= $this->Form->create($propertyCondition); ?>
    <fieldset>
        <legend><?= __('Rent Calculation') ?></legend>


        <?= $this->Form->input('rent') ?>
        <?= $this->Form->input('common_fee') ?>
        <?= $this->Form->input('annual_guarantee_charge') ?>
        <?= $this->Form->input('renewal_fee') ?>
        <?= $this->Form->input('renewal_extra_fee') ?>
        <?= $this->Form->input('insurance_fee') ?>
        <?= $this->Form->input('deposit') ?>
        <?= $this->Form->input('thanx_fee') ?>
        <?= $this->Form->input('initial_guarantee_charge') ?>
        <?= $this->Form->input('broker_commission') ?>
        <?= $this->Form->input('key_replacement_cost') ?>
        <?= $this->Form->input('free_rent') ?>

<? /*
        <?= $this->Form->input('parking') ?>
        <?= $this->Form->input('bicycle') ?>
*/ ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Property Conditions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rental Properties'), ['controller' => 'RentalProperties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental Property'), ['controller' => 'RentalProperties', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="propertyConditions form large-10 medium-9 columns">
    <?= $this->Form->create($propertyCondition); ?>
    <fieldset>
        <legend><?= __('Add Property Condition') ?></legend>
        <?php
            echo $this->Form->input('rental_property_id', ['options' => $rentalProperties]);
            echo $this->Form->input('rent');
            echo $this->Form->input('common_fee');
            echo $this->Form->input('parking');
            echo $this->Form->input('bicycle');
            echo $this->Form->input('annual_guarantee_charge');
            echo $this->Form->input('renewal_fee');
            echo $this->Form->input('renewal_extra_fee');
            echo $this->Form->input('insurance_fee');
            echo $this->Form->input('deposit');
            echo $this->Form->input('thanx_fee');
            echo $this->Form->input('initial_guarantee_charge');
            echo $this->Form->input('broker_commission');
            echo $this->Form->input('key_replacement_cost');
            echo $this->Form->input('free_rent');
            echo $this->Form->input('remarks');
            echo $this->Form->input('on_sale');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

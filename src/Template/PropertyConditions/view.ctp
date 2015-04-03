<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Property Condition'), ['action' => 'edit', $propertyCondition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property Condition'), ['action' => 'delete', $propertyCondition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyCondition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Property Conditions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property Condition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rental Properties'), ['controller' => 'RentalProperties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental Property'), ['controller' => 'RentalProperties', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="propertyConditions view large-10 medium-9 columns">
    <h2><?= h($propertyCondition->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($propertyCondition->id) ?></p>
            <h6 class="subheader"><?= __('Rental Property') ?></h6>
            <p><?= $propertyCondition->has('rental_property') ? $this->Html->link($propertyCondition->rental_property->name, ['controller' => 'RentalProperties', 'action' => 'view', $propertyCondition->rental_property->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Remarks') ?></h6>
            <p><?= h($propertyCondition->remarks) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Rent') ?></h6>
            <p><?= $this->Number->format($propertyCondition->rent) ?></p>
            <h6 class="subheader"><?= __('Common Fee') ?></h6>
            <p><?= $this->Number->format($propertyCondition->common_fee) ?></p>
            <h6 class="subheader"><?= __('Parking') ?></h6>
            <p><?= $this->Number->format($propertyCondition->parking) ?></p>
            <h6 class="subheader"><?= __('Bicycle') ?></h6>
            <p><?= $this->Number->format($propertyCondition->bicycle) ?></p>
            <h6 class="subheader"><?= __('Annual Guarantee Charge') ?></h6>
            <p><?= $this->Number->format($propertyCondition->annual_guarantee_charge) ?></p>
            <h6 class="subheader"><?= __('Renewal Fee') ?></h6>
            <p><?= $this->Number->format($propertyCondition->renewal_fee) ?></p>
            <h6 class="subheader"><?= __('Renewal Extra Fee') ?></h6>
            <p><?= $this->Number->format($propertyCondition->renewal_extra_fee) ?></p>
            <h6 class="subheader"><?= __('Insurance Fee') ?></h6>
            <p><?= $this->Number->format($propertyCondition->insurance_fee) ?></p>
            <h6 class="subheader"><?= __('Deposit') ?></h6>
            <p><?= $this->Number->format($propertyCondition->deposit) ?></p>
            <h6 class="subheader"><?= __('Thanx Fee') ?></h6>
            <p><?= $this->Number->format($propertyCondition->thanx_fee) ?></p>
            <h6 class="subheader"><?= __('Initial Guarantee Charge') ?></h6>
            <p><?= $this->Number->format($propertyCondition->initial_guarantee_charge) ?></p>
            <h6 class="subheader"><?= __('Broker Commission') ?></h6>
            <p><?= $this->Number->format($propertyCondition->broker_commission) ?></p>
            <h6 class="subheader"><?= __('Key Replacement Cost') ?></h6>
            <p><?= $this->Number->format($propertyCondition->key_replacement_cost) ?></p>
            <h6 class="subheader"><?= __('Free Rent') ?></h6>
            <p><?= $this->Number->format($propertyCondition->free_rent) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $this->Number->format($propertyCondition->status) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($propertyCondition->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($propertyCondition->updated) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('On Sale') ?></h6>
            <p><?= $propertyCondition->on_sale ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>

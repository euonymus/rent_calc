<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rental Property'), ['action' => 'edit', $rentalProperty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rental Property'), ['action' => 'delete', $rentalProperty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rentalProperty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rental Properties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental Property'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Property Conditions'), ['controller' => 'PropertyConditions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property Condition'), ['controller' => 'PropertyConditions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rentalProperties view large-10 medium-9 columns">
    <h2><?= h($rentalProperty->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($rentalProperty->id) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($rentalProperty->name) ?></p>
            <h6 class="subheader"><?= __('Arrangement') ?></h6>
            <p><?= h($rentalProperty->arrangement) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($rentalProperty->address) ?></p>
            <h6 class="subheader"><?= __('Room') ?></h6>
            <p><?= h($rentalProperty->room) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Extent') ?></h6>
            <p><?= $this->Number->format($rentalProperty->extent) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Built') ?></h6>
            <p><?= h($rentalProperty->built) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($rentalProperty->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($rentalProperty->updated) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $rentalProperty->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related PropertyConditions') ?></h4>
    <?php if (!empty($rentalProperty->property_conditions)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Rental Property Id') ?></th>
            <th><?= __('Rent') ?></th>
            <th><?= __('Common Fee') ?></th>
            <th><?= __('Parking') ?></th>
            <th><?= __('Bicycle') ?></th>
            <th><?= __('Annual Guarantee Charge') ?></th>
            <th><?= __('Renewal Fee') ?></th>
            <th><?= __('Renewal Extra Fee') ?></th>
            <th><?= __('Insurance Fee') ?></th>
            <th><?= __('Deposit') ?></th>
            <th><?= __('Thanx Fee') ?></th>
            <th><?= __('Initial Guarantee Charge') ?></th>
            <th><?= __('Broker Commission') ?></th>
            <th><?= __('Key Replacement Cost') ?></th>
            <th><?= __('Free Rent') ?></th>
            <th><?= __('Remarks') ?></th>
            <th><?= __('On Sale') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($rentalProperty->property_conditions as $propertyConditions): ?>
        <tr>
            <td><?= h($propertyConditions->id) ?></td>
            <td><?= h($propertyConditions->rental_property_id) ?></td>
            <td><?= h($propertyConditions->rent) ?></td>
            <td><?= h($propertyConditions->common_fee) ?></td>
            <td><?= h($propertyConditions->parking) ?></td>
            <td><?= h($propertyConditions->bicycle) ?></td>
            <td><?= h($propertyConditions->annual_guarantee_charge) ?></td>
            <td><?= h($propertyConditions->renewal_fee) ?></td>
            <td><?= h($propertyConditions->renewal_extra_fee) ?></td>
            <td><?= h($propertyConditions->insurance_fee) ?></td>
            <td><?= h($propertyConditions->deposit) ?></td>
            <td><?= h($propertyConditions->thanx_fee) ?></td>
            <td><?= h($propertyConditions->initial_guarantee_charge) ?></td>
            <td><?= h($propertyConditions->broker_commission) ?></td>
            <td><?= h($propertyConditions->key_replacement_cost) ?></td>
            <td><?= h($propertyConditions->free_rent) ?></td>
            <td><?= h($propertyConditions->remarks) ?></td>
            <td><?= h($propertyConditions->on_sale) ?></td>
            <td><?= h($propertyConditions->status) ?></td>
            <td><?= h($propertyConditions->created) ?></td>
            <td><?= h($propertyConditions->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'PropertyConditions', 'action' => 'view', $propertyConditions->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'PropertyConditions', 'action' => 'edit', $propertyConditions->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PropertyConditions', 'action' => 'delete', $propertyConditions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyConditions->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>

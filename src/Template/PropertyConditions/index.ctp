<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Property Condition'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rental Properties'), ['controller' => 'RentalProperties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental Property'), ['controller' => 'RentalProperties', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="propertyConditions index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('rental_property_id') ?></th>
            <th><?= $this->Paginator->sort('rent') ?></th>
            <th><?= $this->Paginator->sort('common_fee') ?></th>
            <th><?= $this->Paginator->sort('parking') ?></th>
            <th><?= $this->Paginator->sort('bicycle') ?></th>
            <th><?= $this->Paginator->sort('annual_guarantee_charge') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($propertyConditions as $propertyCondition): ?>
        <tr>
            <td><?= h($propertyCondition->id) ?></td>
            <td>
                <?= $propertyCondition->has('rental_property') ? $this->Html->link($propertyCondition->rental_property->name, ['controller' => 'RentalProperties', 'action' => 'view', $propertyCondition->rental_property->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($propertyCondition->rent) ?></td>
            <td><?= $this->Number->format($propertyCondition->common_fee) ?></td>
            <td><?= $this->Number->format($propertyCondition->parking) ?></td>
            <td><?= $this->Number->format($propertyCondition->bicycle) ?></td>
            <td><?= $this->Number->format($propertyCondition->annual_guarantee_charge) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $propertyCondition->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $propertyCondition->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $propertyCondition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyCondition->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Rental Property'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Property Conditions'), ['controller' => 'PropertyConditions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property Condition'), ['controller' => 'PropertyConditions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rentalProperties index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('extent') ?></th>
            <th><?= $this->Paginator->sort('arrangement') ?></th>
            <th><?= $this->Paginator->sort('address') ?></th>
            <th><?= $this->Paginator->sort('room') ?></th>
            <th><?= $this->Paginator->sort('built') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($rentalProperties as $rentalProperty): ?>
        <tr>
            <td><?= h($rentalProperty->id) ?></td>
            <td><?= h($rentalProperty->name) ?></td>
            <td><?= $this->Number->format($rentalProperty->extent) ?></td>
            <td><?= h($rentalProperty->arrangement) ?></td>
            <td><?= h($rentalProperty->address) ?></td>
            <td><?= h($rentalProperty->room) ?></td>
            <td><?= h($rentalProperty->built) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $rentalProperty->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rentalProperty->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rentalProperty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rentalProperty->id)]) ?>
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

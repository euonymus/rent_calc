<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rentalProperty->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rentalProperty->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rental Properties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Property Conditions'), ['controller' => 'PropertyConditions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property Condition'), ['controller' => 'PropertyConditions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rentalProperties form large-10 medium-9 columns">
    <?= $this->Form->create($rentalProperty); ?>
    <fieldset>
        <legend><?= __('Edit Rental Property') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('extent');
            echo $this->Form->input('arrangement');
            echo $this->Form->input('address');
            echo $this->Form->input('room');
            echo $this->Form->input('built', array('empty' => true, 'default' => ''));
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

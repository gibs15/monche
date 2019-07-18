<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ong $ong
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ongs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ongs form large-9 medium-8 columns content">
    <?= $this->Form->create($ong) ?>
    <fieldset>
        <legend><?= __('Add Ong') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('opens_at');
            echo $this->Form->control('closes_at');
            echo $this->Form->control('from_day');
            echo $this->Form->control('to_day');
            echo $this->Form->control('location_lat');
            echo $this->Form->control('location_long');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

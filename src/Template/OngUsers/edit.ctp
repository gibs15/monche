<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OngUser $ongUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ongUser->ong],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ongUser->ong)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ong Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ongUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($ongUser) ?>
    <fieldset>
        <legend><?= __('Edit Ong User') ?></legend>
        <?php
            echo $this->Form->control('ong_id');
            echo $this->Form->control('user_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

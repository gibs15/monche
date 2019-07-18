<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OngUser $ongUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ong User'), ['action' => 'edit', $ongUser->ong]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ong User'), ['action' => 'delete', $ongUser->ong], ['confirm' => __('Are you sure you want to delete # {0}?', $ongUser->ong)]) ?> </li>
        <li><?= $this->Html->link(__('List Ong Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ong User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ongUsers view large-9 medium-8 columns content">
    <h3><?= h($ongUser->ong) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ong Id') ?></th>
            <td><?= $this->Number->format($ongUser->ong_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($ongUser->user_id) ?></td>
        </tr>
    </table>
</div>

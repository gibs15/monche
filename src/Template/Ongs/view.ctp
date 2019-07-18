<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ong $ong
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ong'), ['action' => 'edit', $ong->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ong'), ['action' => 'delete', $ong->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ong->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ongs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ong'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ongs view large-9 medium-8 columns content">
    <h3><?= h($ong->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ong->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opens At') ?></th>
            <td><?= h($ong->opens_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Closes At') ?></th>
            <td><?= h($ong->closes_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('From Day') ?></th>
            <td><?= h($ong->from_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To Day') ?></th>
            <td><?= h($ong->to_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ong->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($ong->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Lat') ?></th>
            <td><?= $this->Number->format($ong->location_lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Long') ?></th>
            <td><?= $this->Number->format($ong->location_long) ?></td>
        </tr>
    </table>
</div>

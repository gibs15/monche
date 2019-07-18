<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Food Type') ?></th>
            <td><?= h($event->food_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $event->has('user') ? $this->Html->link($event->user->name, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($event->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N Meals') ?></th>
            <td><?= $this->Number->format($event->n_meals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Lat') ?></th>
            <td><?= $this->Number->format($event->location_lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Long') ?></th>
            <td><?= $this->Number->format($event->location_long) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datetime') ?></th>
            <td><?= h($event->datetime) ?></td>
        </tr>
    </table>
</div>

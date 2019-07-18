<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subscription'), ['action' => 'edit', $subscription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subscription'), ['action' => 'delete', $subscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subscriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscription'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subscriptions view large-9 medium-8 columns content">
    <h3><?= h($subscription->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subscription->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $this->Number->format($subscription->event) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($subscription->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meals Needed') ?></th>
            <td><?= $this->Number->format($subscription->meals_needed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ong Delivery') ?></th>
            <td><?= $this->Number->format($subscription->ong_delivery) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date Time') ?></th>
            <td><?= h($subscription->delivery_date_time) ?></td>
        </tr>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ong Users'), ['controller' => 'OngUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ong User'), ['controller' => 'OngUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subscriptions'), ['controller' => 'Subscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscription'), ['controller' => 'Subscriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Passwd') ?></th>
            <td><?= h($user->passwd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($user->phone) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($user->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Food Type') ?></th>
                <th scope="col"><?= __('N Meals') ?></th>
                <th scope="col"><?= __('Location Lat') ?></th>
                <th scope="col"><?= __('Location Long') ?></th>
                <th scope="col"><?= __('Datetime') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->name) ?></td>
                <td><?= h($events->food_type) ?></td>
                <td><?= h($events->n_meals) ?></td>
                <td><?= h($events->location_lat) ?></td>
                <td><?= h($events->location_long) ?></td>
                <td><?= h($events->datetime) ?></td>
                <td><?= h($events->user_id) ?></td>
                <td><?= h($events->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ong Users') ?></h4>
        <?php if (!empty($user->ong_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Ong Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->ong_users as $ongUsers): ?>
            <tr>
                <td><?= h($ongUsers->ong_id) ?></td>
                <td><?= h($ongUsers->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OngUsers', 'action' => 'view', $ongUsers->ong]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OngUsers', 'action' => 'edit', $ongUsers->ong]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OngUsers', 'action' => 'delete', $ongUsers->ong], ['confirm' => __('Are you sure you want to delete # {0}?', $ongUsers->ong)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subscriptions') ?></h4>
        <?php if (!empty($user->subscriptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Event') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Meals Needed') ?></th>
                <th scope="col"><?= __('Ong Delivery') ?></th>
                <th scope="col"><?= __('Delivery Date Time') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->subscriptions as $subscriptions): ?>
            <tr>
                <td><?= h($subscriptions->id) ?></td>
                <td><?= h($subscriptions->event) ?></td>
                <td><?= h($subscriptions->user_id) ?></td>
                <td><?= h($subscriptions->meals_needed) ?></td>
                <td><?= h($subscriptions->ong_delivery) ?></td>
                <td><?= h($subscriptions->delivery_date_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Subscriptions', 'action' => 'view', $subscriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subscriptions', 'action' => 'edit', $subscriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subscriptions', 'action' => 'delete', $subscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

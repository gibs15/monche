<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ong[]|\Cake\Collection\CollectionInterface $ongs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ong'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ongs index large-9 medium-8 columns content">
    <h3><?= __('Ongs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opens_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('closes_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_lat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_long') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ongs as $ong): ?>
            <tr>
                <td><?= $this->Number->format($ong->id) ?></td>
                <td><?= h($ong->name) ?></td>
                <td><?= $this->Number->format($ong->phone) ?></td>
                <td><?= h($ong->opens_at) ?></td>
                <td><?= h($ong->closes_at) ?></td>
                <td><?= h($ong->from_day) ?></td>
                <td><?= h($ong->to_day) ?></td>
                <td><?= $this->Number->format($ong->location_lat) ?></td>
                <td><?= $this->Number->format($ong->location_long) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ong->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ong->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ong->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ong->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

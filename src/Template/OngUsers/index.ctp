<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OngUser[]|\Cake\Collection\CollectionInterface $ongUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ong User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ongUsers index large-9 medium-8 columns content">
    <h3><?= __('Ong Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ong_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ongUsers as $ongUser): ?>
            <tr>
                <td><?= $this->Number->format($ongUser->ong_id) ?></td>
                <td><?= $this->Number->format($ongUser->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ongUser->ong]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ongUser->ong]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ongUser->ong], ['confirm' => __('Are you sure you want to delete # {0}?', $ongUser->ong)]) ?>
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

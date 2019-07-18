<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <h2 class="heading"><?= __('Acciones') ?></h2>
        <li><?= $this->Html->link(__('Listar usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar eventos'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo evento'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar usuarios de ONG'), ['controller' => 'OngUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo usuario de ONG'), ['controller' => 'OngUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar subscripciones'), ['controller' => 'Subscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva subscripción'), ['controller' => 'Subscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
	<h2 class="heading"><?= __('Agregue la información del nuevo usuario') ?></h2>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('passwd');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>

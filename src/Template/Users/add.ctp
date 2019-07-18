<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<div class="w3-container" id="add_user"><br>
    	<div class="container">
    		<div class="row d-flex">
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
	</div>
	</div>
		<div>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
	<section class="ftco-section">
    	<div class="container">
    		<div class="row d-flex">
			<div class="w3-container w3-padding-64" id="add_user"><br>
				<h2 class="heading"><?= __('Agregue la información del nuevo usuario') ?></h2>
				
				<br>
				
				<form action="/action_page.php" target="_blank">
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Nombre" required name="name"></p>
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Correo electrónico" required name="email"></p>
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Teléfono" required name="phone"></p>
				<p><input class="w3-input w3-padding-16" type="password" placeholder="Contraseña" required name="passwd"></p>
				<p><select id="role" name="role">
					<option value="australia">Voluntario</option>
					<option value="canada">Proveedor</option>
				</select></p>
				<p><button class="w3-button w3-light-grey w3-section" type="submit">Agregar</button></p>
				</form>
				</div>
			</div>
		<div>
	</section>
	</fieldset>
    <?= $this->Form->end() ?>
</div>

<?php 
    $this->start('backimg');

?>

    <?php echo $this->request->webroot; ?>images/bg_1.jpg

<?php $this->end();?>

<?php 
    $this->start('title');

?>ONGs

<?php $this->end();?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ong $ong
 */
?>


    <section class="ftco-section">
        <div class="container">



<div class="ongs form large-9 medium-8 columns content volunter-form">
    <?= $this->Form->create($ong) ?>
    <fieldset>
    	<div class="container">
    		<div class="row d-flex">
			<nav class="large-3 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Atrás'), ['action' => 'index']) ?></li>
    </ul>
</nav>
			<div class="w3-container" id="add_user"><br>
				<h2 class="heading"><?= __('Agregue la información de la ONG') ?></h2>
				
				<br>
				
				<form action="/action_page.php" target="_blank">
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Nombre" required name="name"></p>
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Teléfono" required name="phone"></p>
				<p>Horario de atención</p>
				<p>De:</p>
				<p><input class="w3-input w3-padding-16" type="time" placeholder="Abre a las" required name="opens_at" value="00:00"></p>
				<p>Hasta:</p>
				<p><input class="w3-input w3-padding-16" type="time" placeholder="Cierra a las" required name="closes_at" value="00:00"></p>
				<p>De:</p>
				<p><select id="from_day" name="from_day" placeholder="De día">
					<option value="lunes">Lunes</option>
					<option value="martes">Martes</option>
					<option value="lunes">Miércoles</option>
					<option value="martes">Jueves</option>
					<option value="lunes">Viernes</option>
					<option value="martes">Sabado</option>
					<option value="lunes">Domingo</option>
				</select></p>
				<p>A:</p>
				<p><select id="to_day" name="to_day" placeholder="A día ">
					<option value="lunes">Lunes</option>
					<option value="martes">Martes</option>
					<option value="lunes">Miércoles</option>
					<option value="martes">Jueves</option>
					<option value="lunes">Viernes</option>
					<option value="martes">Sabado</option>
					<option value="lunes">Domingo</option>
				</select></p>
				<p><button class="w3-button w3-light-grey w3-section" type="submit">Agregar</button></p>
				</form>
				</div>
			</div>
		<div>
    </fieldset>
    <?= $this->Form->end() ?>
</div>


    </div>
    </section>
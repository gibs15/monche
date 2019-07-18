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


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Atrás'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ongs form large-9 medium-8 columns content volunter-form">
    <?= $this->Form->create($ong) ?>
    <fieldset>
        <legend><?= __('Add Ong') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('opens_at');
            echo $this->Form->control('closes_at');
            echo $this->Form->control('from_day');
            echo $this->Form->control('to_day');
            echo $this->Form->control('location_lat');
            echo $this->Form->control('location_long');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


    </div>
    </section>
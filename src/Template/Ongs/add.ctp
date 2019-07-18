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


    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?= $this->Html->link(__('Atrás'), ['action' => 'index']) ?>
    </ul>
</nav>
<div class="ongs form large-9 medium-8 columns content volunter-form">
    <?= $this->Form->create($ong) ?>
    <fieldset>
        <legend><?= __('Nueva ONG') ?></legend>
        <div class="row block-9">
        <div class="col-md-6 pr-md-5">
        <?php
            $this->Form->templates($template);
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('opens_at');
            echo $this->Form->control('closes_at');
            echo $this->Form->control('from_day');
            echo $this->Form->control('to_day');
            echo $this->Form->control('location_lat');
            echo $this->Form->control('location_long');
        ?>
        </div>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


    </div>
    </section>
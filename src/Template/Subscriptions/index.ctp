<?php 
    $this->start('backimg');

?>

    <?php echo $this->request->webroot; ?>images/bg_1.jpg

<?php $this->end();?>

<?php 
    $this->start('title');

?>Suscripciones

<?php $this->end();?>

<?php 
    $this->start('scripts');

?>


    <script type="text/javascript">
        
        $(document).ready(function() {
            $('#list').DataTable({
              "language": {
                "url": "/monche/plugins/datatables/Spanish.json"
              }
            });
        } );

    </script>


<?php $this->end();?>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>

    <section class="ftco-section">
        <div class="container">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            
            <?= $this->Html->link(__('Nueva Suscripcion'), ['action' => 'add'],['class' => 'btn btn-success pull-left']) ?>
        </ul>
    </nav>
<div class="subscriptions index large-9 medium-8 columns content">
    <h3><?= __('Subscriptions') ?></h3>
    <table id="list" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Evento</th>
                <th scope="col">Usuario</th>
                <th scope="col">Comidas Necesitadas</th>
                <th scope="col">ONG para entrega</th>
                <th scope="col">Fecha de entrega</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriptions as $subscription): ?>
            <tr>
                <td><?= h($subscription->id) ?></td>
                <td><?= h($subscription->event) ?></td>
                <td><?= h($subscription->user_id) ?></td>
                <td><?= h($subscription->meals_needed) ?></td>
                <td><?= h($subscription->ong_delivery) ?></td>
                <td><?= h($subscription->delivery_date_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $subscription->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $subscription->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $subscription->id], ['confirm' => __('Esta seguro que desea eliminar a {0}?', $subscription->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>

    </div>

</section>
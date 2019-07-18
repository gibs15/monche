<?php 
    $this->start('backimg');

?>

    <?php echo $this->request->webroot; ?>images/bg_1.jpg

<?php $this->end();?>

<?php 
    $this->start('title');

?>Eventos

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
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
    <section class="ftco-section">
        <div class="container">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            
            <?= $this->Html->link(__('Nuevo Evento'), ['action' => 'add'],['class' => 'btn btn-success pull-left']) ?>
        </ul>
    </nav>
<div class="events index large-9 medium-8 columns content">
    <h3><?= __('Eventos') ?></h3>
    <table id="list" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo de Comida</th>
                <th scope="col">Cantidad de comidas</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estado</th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                
                <td><?= h($event->name) ?></td>
                <td><?= h($event->food_type) ?></td>
                <td><?= h($event->n_meals) ?></td>
                <td><?= h($event->datetime) ?></td>
                <td><?= h($event->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $event->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $event->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $event->id], ['confirm' => __('Está seguro que desea eliminar a {0}?', $event->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>

</div>
</section>
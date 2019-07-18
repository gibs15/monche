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
 * @var \App\Model\Entity\Ong[]|\Cake\Collection\CollectionInterface $ongs
 */
?>


    <section class="ftco-section">
        <div class="container">

    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            
            <?= $this->Html->link(__('Nueva ONG'), ['action' => 'add'],['class' => 'btn btn-success pull-left']) ?>
        </ul>
    </nav>
<div class="ongs index large-9 medium-8 columns content">
    <h3><?= __('ONGs') ?></h3>
    <table id="list" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Horario</th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ongs as $ong): ?>
            <tr>
                
                <td><?= h($ong->name) ?></td>
                <td><?= $this->Number->format($ong->phone) ?></td>
                <td>Abre de <?= h($ong->from_day) ?> a <?= h($ong->to_day) ?> de <?= h($ong->opens_at) ?> a <?= h($ong->closes_at) ?></td>
                

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ong->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ong->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ong->id], ['confirm' => __('Está seguro que desea eliminar a {0}?', $ong->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</div>
</section>
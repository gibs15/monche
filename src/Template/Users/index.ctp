<?php 
    $this->start('backimg');

?>

    <?php echo $this->request->webroot; ?>images/bg_1.jpg

<?php $this->end();?>

<?php 
    $this->start('title');

?>Usuarios

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
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

    <section class="ftco-section">
        <div class="container">


    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            
            <?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add'],['class' => 'btn btn-success pull-left']) ?>
        </ul>
    </nav>

    <div class="users index large-9 medium-8 columns content">
        <h3><?= __('Usuarios') ?></h3>
        <table id="list" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Teléfono</th>
                    
                    <th scope="col">Rol</th>
                    <th scope="col" class="actions">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->phone) ?></td>
                    
                    <td><?= h($user->role) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Está seguro que desea eliminar a {0}?', $user->name)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    </div>
    </section>
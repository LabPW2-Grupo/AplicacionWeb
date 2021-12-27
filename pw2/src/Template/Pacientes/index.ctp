<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $pacientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?></li>
        <li class="heading">AJAX</li>
        <li><?= $this->Html->link(__('Nuevo Paciente'), ['action' => 'agregar']) ?></li>
    </ul>
</nav>
<div class="pacientes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <?php
        date_default_timezone_set('America/Lima');
        echo date('l jS \of F Y h:i:s A');
        echo '<br>';
    ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_patient') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dni') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                <th scope="col" class="actions" colspan="2">AJAX</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?= $this->Number->format($paciente->id_patient) ?></td>
                    <td><?= h($paciente->name) ?></td>
                    <td><?= h($paciente->last_name) ?></td>
                    <td><?= h($paciente->dni) ?></td>
                    <td><?= $this->Number->format($paciente->age) ?></td>
                    <td><?= h($paciente->sex) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->id_patient]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->id_patient]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->id_patient], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id_patient)]) ?>
                    </td>
                    <td class="actions" colspan="2">
                        <button><?= $this->Html->link(__('Editar'), ['action' => 'editar', $paciente->id_patient]) ?></button>
                        <button onclick="eliminar(<?= $paciente->id_patient ?>)">Eliminar</button>
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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<?php use Cake\Routing\Router; ?>

<script>
    function eliminar(ident){
        $.ajax({
            type: 'POST',
            url: '<?= Router::url(["controller"=>"Pacientes","action"=>"eliminar"]); ?>',
            data: {id:ident},
            beforeSend: function( xhr ) {
                xhr.setRequestHeader( 'X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success:function( data ) {
                $('#paciente_'+ident).fadeOut("slow");
                $('#messages_ajax').html('<div class="message success" onclick="this.classList.add(\'hidden\')">'+data+'</div>');
            },
            dataType: 'json'
         });
    }
</script>
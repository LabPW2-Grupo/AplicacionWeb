<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $paciente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pacientes form large-9 medium-8 columns content">
    <form id="editFormData" method="post">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre" value="<?= h($paciente->name) ?>">
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" class="form-control" name="last_name" placeholder="Apellido" value="<?= h($paciente->last_name) ?>">
        </div>
        <div class="form-group">
            <label>DNI</label>
            <input type="text" class="form-control" name="dni" placeholder="DNI" value="<?= h($paciente->dni) ?>">
        </div>
        <div class="form-group">
            <label>Edad</label>
            <input type="number" class="form-control" name="age" placeholder="Edad" value="<?= $this->Number->format($paciente->age) ?>">
        </div>
        <div class="form-group">
            <label>Género</label>
            <input type="text" class="form-control" name="sex" placeholder="Género" value="<?= h($paciente->sex) ?>">
        </div>

        <div class="clearfix"></div>
        <button id="btn-edit">Actualizar</button>
        <input type="reset" value="Cancelar">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<?php use Cake\Routing\Router; ?>

<script>
    $("#btn-edit").click(function(){
        if ($("#editFormData")[0].checkValidity()) {
            function editar(){
                $.ajax({
                    type: 'POST',
                    url: '<?= Router::url(["controller"=>"Pacientes","action"=>"editar"]); ?>',
                    data: $("#editFormData").serialize(),
                    beforeSend: function (xhr) { 
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                    },
                    success: function( data ) {
                        alert(data);
                    },
                    dataType: 'json'
                });
            }
        }
    });
</script>
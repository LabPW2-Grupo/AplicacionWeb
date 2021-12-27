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

<div class="empleado form large-9 medium-8 columns content">
    <form id="formData" method="post">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="name" required="true" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" class="form-control" name="last_name" required="true" placeholder="Apellido">
        </div>
        <div class="form-group">
            <label>DNI</label>
            <input type="text" class="form-control" name="dni" required="true" placeholder="DNI">
        </div>
        <div class="form-group">
            <label>Edad</label>
            <input type="number" class="form-control" name="age" required="true" placeholder="Edad">
        </div>
        <div class="form-group">
            <label>Género</label>
            <input type="text" class="form-control" name="sex" required="true" placeholder="Género">
        </div>

        <div class="clearfix"></div>
        <button id="btn-add">Agregar</button>
        <input type="reset" value="Cancelar">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<?php use Cake\Routing\Router; ?>

<script>
    $("#btn-add").click(function(){
    if ($("#formData")[0].checkValidity()) {
            $.ajax({
                type: 'POST',
                url: '<?= Router::url(["controller"=>"Pacientes","action"=>"agregar"]); ?>',
                data: $("#formData").serialize(),
                beforeSend: function (xhr) { 
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                },
                success: function( data ) {
                    alert(data);
                },
                dataType: 'json'
            });
        }
    });
</script>

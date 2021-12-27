<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Doctor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="doctor form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor) ?>
    <fieldset>
        <legend><?= __('Add Doctor') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('edad');
            echo $this->Form->control('sueldo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

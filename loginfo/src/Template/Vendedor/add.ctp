<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedor $vendedor
 */
?>    
<ul class="nav nav-tabs">

<li class="nav-item">
  <a class="nav-link"  href="add">Vendedor</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="../Itens/add">Itens</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="../Comprador/add">Comprador</a>
</li>

<li class="nav-item dropdown">
  <a class="nav-link"  href="../Vendas/add">Vendas</a>
</li>

</ul>

</nav>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">

        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Vendedores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Editar Cadastro'), ['action' => 'edit']) ?></li>
        <li><?= $this->Html->link(__('Vizualizar Cadastro'), ['action' => 'view']) ?></li>

    </ul>
</nav>

<div class="vendedor form large-9 medium-8 columns content">
  <?= $this->Form->create($vendedor) ?>

    <fieldset>

      <legend>Cadastro Vendedor</legend>
        <?php
          echo $this->Form->control(('Nome'),['class'=>'form-control']);
          echo $this->Form->control(('Matricula'),['class'=>'form-control']);
          echo $this->Form->control(('Email'),['class'=>'form-control']);
        ?>
    </fieldset>

    <?= $this->Form->button(__('Cancelar'),['action' =>'index', 'class'=> 'btn btn-primary'])?>
    <?=$this->Form->button(__('Cadastrar'),['type'=>'submit', 'class'=>'btn btn-primary'])?>
  <?= $this->Form->end() ?>

</div>
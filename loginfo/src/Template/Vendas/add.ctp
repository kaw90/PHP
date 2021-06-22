<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<ul class="nav nav-tabs">
<li class="nav-item">
  <a class="nav-link"  href="../Vendedor/add">Vendedor</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="../Itens/add">Itens</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="../Comprador/add">Comprador</a>
</li>

<li class="nav-item dropdown">
  <a class="nav-link"  href="add">Vendas</a>
</li>

</ul>

</nav>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">

        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit']) ?></li>
        <li><?= $this->Html->link(__('Vizualizar'), ['action' => 'view']) ?></li>

    </ul>
</nav>

<div class="vendas form large-9 medium-8 columns content">
    <?= $this->Form->create($venda) ?>
    <fieldset>
        <legend><?= __('Vendas') ?></legend>
        <?php
            echo $this->Form->control(('Nome do Iten'),['class'=>'form-control']);
            echo $this->Form->control('Quantidade');
            echo $this->Form->control('Vendedor');
            echo $this->Form->control('Data da Venda');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['type'=> 'submit', 'class'=> 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Iten $iten
 */
?>
<ul class="nav nav-tabs">

<li class="nav-item">
  <a class="nav-link"  href="../Vendedor/add">Vendedor</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="add">Itens</a>
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
        <li><?= $this->Html->link(__('Listagem'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit']) ?></li>
        <li><?= $this->Html->link(__('Vizualizar'), ['action' => 'view']) ?></li>

    </ul>
</nav>
<div class="itens form large-9 medium-8 columns content">
    <?= $this->Form->create($iten) ?>
    <fieldset>
        <legend><?= __('Add Iten') ?></legend>
        <?php
            echo $this->Form->control('Nome do Iten');
            echo $this->Form->control('Unidade de Medida');
            echo $this->Form->control('Quantidade');
            echo $this->Form->control('Preço');
            echo $this->Form->control('Tipo');
            echo $this->Form->control('Data de Validade');
            echo $this->Form->control('Data de Fabricação');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comprador $comprador
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
<nav>
    <ul>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comprador->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comprador->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comprador'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comprador form large-9 medium-8 columns content">
    <?= $this->Form->create($comprador) ?>
    <fieldset>
        <legend><?= __('Edit Comprador') ?></legend>
        <?php
            echo $this->Form->control('Nome');
            echo $this->Form->control('Endereço');
            echo $this->Form->control('Fone');
            echo $this->Form->control('E-mail');
            echo $this->Form->control('Cpf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

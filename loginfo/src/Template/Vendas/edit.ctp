<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vendas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vendas form large-9 medium-8 columns content">
    <?= $this->Form->create($venda) ?>
    <fieldset>
        <legend><?= __('Edit Venda') ?></legend>
        <?php
            echo $this->Form->control('Nome do Iten');
            echo $this->Form->control('Quantidade');
            echo $this->Form->control('Vendedor');
            echo $this->Form->control('Data da Venda');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

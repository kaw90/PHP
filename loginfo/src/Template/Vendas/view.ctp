<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Venda'), ['action' => 'edit', $venda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venda'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendas view large-9 medium-8 columns content">
    <h3><?= h($venda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Do Iten') ?></th>
            <td><?= h($venda->Nome do Iten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendedor') ?></th>
            <td><?= h($venda->Vendedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($venda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($venda->Quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Da Venda') ?></th>
            <td><?= h($venda->Data da Venda) ?></td>
        </tr>
    </table>
</div>

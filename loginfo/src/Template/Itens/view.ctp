<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Iten $iten
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Iten'), ['action' => 'edit', $iten->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Iten'), ['action' => 'delete', $iten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iten->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iten'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itens view large-9 medium-8 columns content">
    <h3><?= h($iten->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Do Iten') ?></th>
            <td><?= h($iten->Nome do Iten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($iten->Tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($iten->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade De Medida') ?></th>
            <td><?= $this->Number->format($iten->Unidade de Medida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($iten->Quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preço') ?></th>
            <td><?= $this->Number->format($iten->Preço) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data De Validade') ?></th>
            <td><?= h($iten->Data de Validade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data De Fabricação') ?></th>
            <td><?= h($iten->Data de Fabricação) ?></td>
        </tr>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comprador $comprador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comprador'), ['action' => 'edit', $comprador->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comprador'), ['action' => 'delete', $comprador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comprador->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comprador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comprador'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comprador view large-9 medium-8 columns content">
    <h3><?= h($comprador->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($comprador->Nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereço') ?></th>
            <td><?= h($comprador->Endereço) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fone') ?></th>
            <td><?= h($comprador->Fone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($comprador->E-mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($comprador->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= $this->Number->format($comprador->Cpf) ?></td>
        </tr>
    </table>
</div>

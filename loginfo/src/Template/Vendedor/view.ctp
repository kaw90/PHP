<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedor $vendedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vendedor'), ['action' => 'edit', $vendedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vendedor'), ['action' => 'delete', $vendedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendedor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendedor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendedor view large-9 medium-8 columns content">
    <h3><?= h($vendedor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($vendedor->Nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= h($vendedor->Matricula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($vendedor->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vendedor->id) ?></td>
        </tr>
    </table>
</div>

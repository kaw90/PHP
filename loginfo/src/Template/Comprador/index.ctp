<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comprador[]|\Cake\Collection\CollectionInterface $comprador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comprador'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comprador index large-9 medium-8 columns content">
    <h3><?= __('Comprador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Endereço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('E-mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cpf') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comprador as $comprador): ?>
            <tr>
                <td><?= $this->Number->format($comprador->id) ?></td>
                <td><?= h($comprador->Nome) ?></td>
                <td><?= h($comprador->Endereço) ?></td>
                <td><?= h($comprador->Fone) ?></td>
                <td><?= h($comprador->E-mail) ?></td>
                <td><?= $this->Number->format($comprador->Cpf) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comprador->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comprador->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comprador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comprador->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

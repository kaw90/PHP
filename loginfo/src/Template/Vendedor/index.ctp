<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedor[]|\Cake\Collection\CollectionInterface $vendedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vendedor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendedor index large-9 medium-8 columns content">
    <h3><?= __('Vendedor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendedor as $vendedor): ?>
            <tr>
                <td><?= $this->Number->format($vendedor->id) ?></td>
                <td><?= h($vendedor->Nome) ?></td>
                <td><?= h($vendedor->Matricula) ?></td>
                <td><?= h($vendedor->Email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vendedor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendedor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedor->id)]) ?>
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

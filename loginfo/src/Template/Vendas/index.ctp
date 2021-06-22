<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda[]|\Cake\Collection\CollectionInterface $vendas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Venda'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendas index large-9 medium-8 columns content">
    <h3><?= __('Vendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome do Iten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vendedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data da Venda') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
            <tr>
                <td><?= $this->Number->format($venda->id) ?></td>
                <td><?= h($venda->Nome do Iten) ?></td>
                <td><?= $this->Number->format($venda->Quantidade) ?></td>
                <td><?= h($venda->Vendedor) ?></td>
                <td><?= h($venda->Data da Venda) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $venda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?>
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

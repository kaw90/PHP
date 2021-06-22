<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Iten[]|\Cake\Collection\CollectionInterface $itens
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Iten'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itens index large-9 medium-8 columns content">
    <h3><?= __('Itens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome do Iten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Unidade de Medida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data de Validade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data de Fabricação') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itens as $iten): ?>
            <tr>
                <td><?= $this->Number->format($iten->id) ?></td>
                <td><?= h($iten->Nome do Iten) ?></td>
                <td><?= $this->Number->format($iten->Unidade de Medida) ?></td>
                <td><?= $this->Number->format($iten->Quantidade) ?></td>
                <td><?= $this->Number->format($iten->Preço) ?></td>
                <td><?= h($iten->Tipo) ?></td>
                <td><?= h($iten->Data de Validade) ?></td>
                <td><?= h($iten->Data de Fabricação) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $iten->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $iten->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $iten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iten->id)]) ?>
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

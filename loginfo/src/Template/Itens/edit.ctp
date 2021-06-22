<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Iten $iten
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $iten->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $iten->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Itens'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="itens form large-9 medium-8 columns content">
    <?= $this->Form->create($iten) ?>
    <fieldset>
        <legend><?= __('Edit Iten') ?></legend>
        <?php
            echo $this->Form->control('Nome do Iten');
            echo $this->Form->control('Unidade de Medida');
            echo $this->Form->control('Quantidade');
            echo $this->Form->control('Preço');
            echo $this->Form->control('Tipo');
            echo $this->Form->control('Data de Validade');
            echo $this->Form->control('Data de Fabricação');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedor $vendedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendedor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendedor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vendedor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vendedor form large-9 medium-8 columns content">
    <?= $this->Form->create($vendedor) ?>
    <fieldset>
        <legend><?= __('Edit Vendedor') ?></legend>
        <?php
            echo $this->Form->control('Nome');
            echo $this->Form->control('Matricula');
            echo $this->Form->control('Email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

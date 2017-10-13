<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $turma->id_turma],
                ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id_turma)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="turma form large-9 medium-8 columns content">
    <?= $this->Form->create($turma) ?>
    <fieldset>
        <legend><?= __('Edit Turma') ?></legend>
        <?php
            echo $this->Form->control('semeste');
            echo $this->Form->control('professor_id');
            echo $this->Form->control('disciplina_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

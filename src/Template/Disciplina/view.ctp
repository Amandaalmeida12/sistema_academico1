<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina $disciplina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disciplina'), ['action' => 'edit', $disciplina->id_disciplina]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disciplina'), ['action' => 'delete', $disciplina->id_disciplina], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id_disciplina)]) ?> </li>
        <li><?= $this->Html->link(__('List Disciplina'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disciplina view large-9 medium-8 columns content">
    <h3><?= h($disciplina->id_disciplina) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($disciplina->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Disciplina') ?></th>
            <td><?= $this->Number->format($disciplina->id_disciplina) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->descricao)); ?>
    </div>
</div>

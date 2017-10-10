<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Turma'), ['action' => 'edit', $turma->id_turma]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turma'), ['action' => 'delete', $turma->id_turma], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id_turma)]) ?> </li>
        <li><?= $this->Html->link(__('List Turma'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turma view large-9 medium-8 columns content">
    <h3><?= h($turma->id_turma) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Semeste') ?></th>
            <td><?= h($turma->semeste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Turma') ?></th>
            <td><?= $this->Number->format($turma->id_turma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Professor') ?></th>
            <td><?= $this->Number->format($turma->id_professor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Disciplina') ?></th>
            <td><?= $this->Number->format($turma->id_disciplina) ?></td>
        </tr>
    </table>
</div>

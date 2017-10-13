<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma[]|\Cake\Collection\CollectionInterface $turma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="turma index large-9 medium-8 columns content">
    <h3><?= __('Turma') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_turma') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semeste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('professor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disciplina_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turma as $turma): ?>
            <tr>
                <td><?= $this->Number->format($turma->id_turma) ?></td>
                <td><?= h($turma->semeste) ?></td>
                <td><?= $this->Number->format($turma->professor_id) ?></td>
                <td><?= $this->Number->format($turma->disciplina_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $turma->id_turma]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $turma->id_turma]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turma->id_turma], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id_turma)]) ?>
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

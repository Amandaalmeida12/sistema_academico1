<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina[]|\Cake\Collection\CollectionInterface $disciplina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disciplina index large-9 medium-8 columns content">
    <h3><?= __('Disciplina') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_disciplina') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplina as $disciplina): ?>
            <tr>
                <td><?= $this->Number->format($disciplina->id_disciplina) ?></td>
                <td><?= h($disciplina->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $disciplina->id_disciplina]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disciplina->id_disciplina]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disciplina->id_disciplina], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id_disciplina)]) ?>
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

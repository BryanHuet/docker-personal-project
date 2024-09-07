<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\House> $house
 */
?>
<div class="house index content">
    <?= $this->Html->link(__('New House'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('House') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('size') ?></th>
                    <th><?= $this->Paginator->sort('ground') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('link') ?></th>
                    <th><?= $this->Paginator->sort('create_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($house as $house): ?>
                <tr>
                    <td><?= $this->Number->format($house->id) ?></td>
                    <td><?= h($house->title) ?></td>
                    <td><?= $this->Number->format($house->price) ?></td>
                    <td><?= h($house->photo) ?></td>
                    <td><?= h($house->size) ?></td>
                    <td><?= h($house->ground) ?></td>
                    <td><?= h($house->address) ?></td>
                    <td><?= h($house->link) ?></td>
                    <td><?= h($house->create_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $house->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $house->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $house->id], ['confirm' => __('Are you sure you want to delete # {0}?', $house->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

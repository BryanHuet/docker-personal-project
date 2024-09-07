<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\House $house
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit House'), ['action' => 'edit', $house->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete House'), ['action' => 'delete', $house->id], ['confirm' => __('Are you sure you want to delete # {0}?', $house->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List House'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New House'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="house view content">
            <h3><?= h($house->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($house->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($house->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Size') ?></th>
                    <td><?= h($house->size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ground') ?></th>
                    <td><?= h($house->ground) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($house->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Link') ?></th>
                    <td><?= h($house->link) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Date') ?></th>
                    <td><?= h($house->create_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($house->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($house->price) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

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
            <?= $this->Html->link(__('List House'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="house form content">
            <?= $this->Form->create($house) ?>
            <fieldset>
                <legend><?= __('Add House') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('price');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('size');
                    echo $this->Form->control('ground');
                    echo $this->Form->control('address');
                    echo $this->Form->control('link');
                    echo $this->Form->control('create_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

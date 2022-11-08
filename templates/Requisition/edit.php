<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $requisition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $requisition->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="requisition form content">
            <?= $this->Form->create($requisition) ?>
            <fieldset>
                <legend><?= __('Edit Requisition') ?></legend>
                <?php
                    echo $this->Form->control('client');
                    echo $this->Form->control('provider');
                    echo $this->Form->control('subTotal');
                    echo $this->Form->control('iva');
                    echo $this->Form->control('total');
                    echo $this->Form->control('deliveryDate');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

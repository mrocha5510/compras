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
            <?= $this->Html->link(__('Listado de Requisiciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="requisition form content">
            <?= $this->Form->create($requisition) ?>
            <fieldset>
                <legend><?= __('Agregar Requisicion') ?></legend>
                <?php
                    echo $this->Form->control('client');
                    echo $this->Form->control('provider');
                    echo $this->Form->control('subTotal');
                    echo $this->Form->control('iva');
                    echo $this->Form->control('total');
                    echo $this->Form->control('deliveryDate');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

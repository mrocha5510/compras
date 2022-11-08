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
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $requisition->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $requisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisition->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="requisition view content">
            <h3><?= h($requisition->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($requisition->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= h($requisition->client) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prorveedor') ?></th>
                    <td><?= h($requisition->provider) ?></td>
                </tr>
                <tr>
                    <th><?= __('SubTotal') ?></th>
                    <td><?= h($requisition->subTotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iva') ?></th>
                    <td><?= h($requisition->iva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= h($requisition->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fehca de Entrega') ?></th>
                    <td><?= h($requisition->deliveryDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Creacion') ?></th>
                    <td><?= h($requisition->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Requisition> $requisition
 */
?>
<div class="requisition index content">
    <?= $this->Html->link(__('Nueva Requisicion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Requisiciones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Cliente') ?></th>
                    <th><?= $this->Paginator->sort('Proveedor') ?></th>
                    <th><?= $this->Paginator->sort('SubTotal') ?></th>
                    <th><?= $this->Paginator->sort('IVA') ?></th>
                    <th><?= $this->Paginator->sort('Total') ?></th>
                    <th><?= $this->Paginator->sort('Fecha de Entrega') ?></th>
                    <th><?= $this->Paginator->sort('Fecha Creacion') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requisition as $requisition): ?>
                <tr>
                    <td><?= $this->Number->format($requisition->id) ?></td>
                    <td><?= h($requisition->client) ?></td>
                    <td><?= h($requisition->provider) ?></td>
                    <td><?= h($requisition->subTotal) ?></td>
                    <td><?= h($requisition->iva) ?></td>
                    <td><?= h($requisition->total) ?></td>
                    <td><?= h($requisition->deliveryDate) ?></td>
                    <td><?= h($requisition->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $requisition->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $requisition->id]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $requisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisition->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primera')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

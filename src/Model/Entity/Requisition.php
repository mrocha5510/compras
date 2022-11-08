<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Requisition Entity
 *
 * @property int $id
 * @property string $client
 * @property string $provider
 * @property string $subTotal
 * @property string $iva
 * @property string $total
 * @property \Cake\I18n\FrozenDate $deliveryDate
 * @property \Cake\I18n\FrozenTime $created
 */
class Requisition extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'client' => true,
        'provider' => true,
        'subTotal' => true,
        'iva' => true,
        'total' => true,
        'deliveryDate' => true,
        'created' => true,
    ];
}

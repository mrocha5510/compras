<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequisitionFixture
 */
class RequisitionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'requisition';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'client' => 'Lorem ipsum dolor sit amet',
                'provider' => 'Lorem ipsum dolor sit amet',
                'subTotal' => 'Lorem ipsum dolor sit amet',
                'iva' => 'Lorem ipsum dolor sit amet',
                'total' => 'Lorem ipsum dolor sit amet',
                'deliveryDate' => '2022-11-08',
                'created' => '2022-11-08 04:13:22',
            ],
        ];
        parent::init();
    }
}

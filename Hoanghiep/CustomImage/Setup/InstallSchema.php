<?php
namespace Hoanghiep\CustomImage\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $this->addDeliveryDateColumn($setup);

        $installer->endSetup();
    }

    public function addDeliveryDateColumn(SchemaSetupInterface $setup){
        $deliveryDate= [
            'type'=>\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            'defaut'=>NULL,
            'nullable'=>true,
            'comment'=>'Delivery Date'
        ];

        $setup->getConnection()->addColumn(
            $setup->getTable('sales_order_address'),
            'delivery_date',
            $deliveryDate
        );

        $setup->getConnection()->addColumn(
            $setup->getTable('quote_address'),
            'delivery_date',
            $deliveryDate
        );
    }
}
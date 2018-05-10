<?php
/**
 * Zenon ContactGrid Schema Setup
 */
namespace Zenon\ContactGrid\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        /**
         * Create table 'zenon_contact_grid'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('zenon_contact_grid')
        )->addColumn(
            'entity_id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Contact Record Id'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Name'
        )->addColumn(
            'email',
            Table::TYPE_TEXT,
            '2M',
            ['nullable' => false],
            'Email Address'
        )->addColumn(
            'comment',
            Table::TYPE_TEXT,
            '2M',
            ['nullable' => false],
            'User Comments'
        )->addColumn(
            'creation_time',
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
            'Creation Time'
        );

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
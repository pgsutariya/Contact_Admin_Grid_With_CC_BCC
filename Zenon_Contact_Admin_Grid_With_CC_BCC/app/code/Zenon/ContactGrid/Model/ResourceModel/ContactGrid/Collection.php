<?php

namespace Zenon\ContactGrid\Model\ResourceModel\ContactGrid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Zenon\ContactGrid\Model\ContactGrid', 'Zenon\ContactGrid\Model\ResourceModel\ContactGrid');
    }
}
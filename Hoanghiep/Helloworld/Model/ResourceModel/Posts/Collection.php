<?php
namespace Hoanghiep\Helloworld\Model\ResourceModel\Posts;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Hoanghiep\Helloworld\Model\Posts',
            'Hoanghiep\Helloworld\Model\ResourceModel\Posts'
        );
    }
}
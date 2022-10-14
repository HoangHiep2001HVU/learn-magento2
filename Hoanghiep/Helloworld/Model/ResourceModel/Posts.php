<?php
namespace Hoanghiep\Helloworld\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class Posts extends AbstractDb
{
    protected function _construct()
    {
        // Hoanghiep_blog is table name and id is Primary of Table
        $this->_init('Hoanghiep_blog', 'id');
    }
}
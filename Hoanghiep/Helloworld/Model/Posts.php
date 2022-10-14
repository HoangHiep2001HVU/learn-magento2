<?php
namespace Hoanghiep\Helloworld\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Posts extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Hoanghiep\Helloworld\Model\ResourceModel\Posts');
    }
}
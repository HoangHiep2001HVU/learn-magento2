<?php
namespace Hoanghiep\Helloworld\Controller\Adminhtml\Posts;
 
use Hoanghiep\Helloworld\Controller\Adminhtml\Posts;
 
class Grid extends Posts
{
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}
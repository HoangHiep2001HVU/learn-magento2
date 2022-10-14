<?php
namespace Hoanghiep\Helloworld\Controller\Adminhtml\Posts;
 
use Hoanghiep\Helloworld\Controller\Adminhtml\Posts;
 
class NewAction extends Posts
{
    /**
     * Create new news action
     *
     * @return void
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
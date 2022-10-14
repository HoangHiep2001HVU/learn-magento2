<?php
namespace Hoanghiep\Helloworld\Block;

use \Magento\Framework\View\Element\Template\Context;
use Hoanghiep\Helloworld\Helper\Data;

class Config extends \Magento\Framework\View\Element\Template
{
    protected $helper;
 
    public function __construct(Context $context, Data $helper)
    {
        $this->helper = $helper;
        parent::__construct($context);
    }
 
    public function showConfigValue($value = ''){
        return $this->helper->getGeneralConfig($value);
    }

    public function showBaseUrlMedia(){
        return $this->helper->getBaseUrlMedia();
    }
}
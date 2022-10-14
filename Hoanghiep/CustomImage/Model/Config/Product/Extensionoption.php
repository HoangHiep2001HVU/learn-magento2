<?php
namespace Hoanghiep\CustomImage\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Extensionoption extends AbstractSource
{
    protected $optionFactory;

    public function getAllOptions()
    {
        $this->_options = [];
        $this->_options[] = ['label' => 'Yes', 'value' => '1'];
        $this->_options[] = ['label' => 'No', 'value' => '0'];

        return $this->_options;
    }


}
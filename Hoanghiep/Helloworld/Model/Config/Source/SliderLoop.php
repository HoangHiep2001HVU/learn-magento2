<?php
namespace Hoanghiep\Helloworld\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Hoanghiep\Helloworld\Block\Widget\Posts;
class SliderLoop extends Posts implements ArrayInterface
{
   public function toOptionArray()
   {
        $options = [
            [
                'value' => 'false',
                'label' => __('Disable')
            ],
            [
                'value' => 'true',
                'label' => __('Enable')
            ],
            
        ];

        return $options;
    }
}
<?php
namespace Hoanghiep\Helloworld\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Hoanghiep\Helloworld\Block\Widget\Posts;
class IsLanding extends Posts implements ArrayInterface
{
   public function toOptionArray()
   {
        $options = [
            [
                'value' => '1',
                'label' => __('Yes')
            ],
            [
                'value' => '0',
                'label' => __('No')
            ],
            
        ];

        return $options;
    }
}
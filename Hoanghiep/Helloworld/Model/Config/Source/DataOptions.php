<?php
namespace Hoanghiep\Helloworld\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Hoanghiep\Helloworld\Block\Widget\Posts;
class DataOptions extends Posts implements ArrayInterface
{
   public function toOptionArray()
   {
        $posts = $this->getCollection();
        foreach ($posts as $post) :
            $options [] = array( 
                    'label' => $this->escapeHtml($post->getName()),
                    'value' => $this->escapeHtml($post->getId())        
            );
        endforeach;

        return $options;
    }
}
<?php
 
namespace Hoanghiep\CustomImage\Plugin\Checkout;
 
use Magento\Checkout\Block\Checkout\LayoutProcessor;
 
 
class BillingAddressLayoutProcessor
{
    public function afterProcess(
        LayoutProcessor $subject,
        array $result
    )
    {
        $this->result = $result;
 
 
        $billingConfiguration = &$this->result['components']['checkout']['children']['steps']['children']['billing-step']
        ['children']['payment']['children']['payments-list']['children'];
 
        if (isset($billingConfiguration)) {
            foreach ($billingConfiguration as $key => &$billingForm) {
                if (!strpos($key, '-form')) {
                    continue;
                }
                if ($billingForm['children']['form-fields']['children']['example']) {
                    unset($billingForm['children']['form-fields']['children']['city']);
                }
 
            }
        }
        return $this->result;
    }
 
}
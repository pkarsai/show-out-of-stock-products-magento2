<?php

namespace Myweb\ShowOutOfStockProducts\Plugin;

class ShowOutOfStockProductsPlugin {

    /**
     * Get Allowed Products
     *
     * @return \Magento\Catalog\Model\Product[]
     */
    public function beforeGetAllowProducts(\Magento\ConfigurableProduct\Block\Product\View\Type\Configurable $subject)
    {
        if (!$subject->hasAllowProducts()) {
            $allProducts = $subject->getProduct()->getTypeInstance()->getUsedProducts($subject->getProduct(), null);
            $products = [];
            foreach ($allProducts as $product) {
                if ($product->getStatus() != \Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_DISABLED) {
                    $products[] = $product;
                }
            }
            $subject->setAllowProducts($products);
        }

        return [];
    }

}
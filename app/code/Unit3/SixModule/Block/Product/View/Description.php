<?php

namespace Unit3\SixModule\Block\Product\View;

class Description extends \Magento\Framework\View\Element\Template
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock) {
        $originalBlock->setTemplate('Unit3_SixModule::description.phtml');
    }
}
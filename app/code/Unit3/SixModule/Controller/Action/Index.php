<?php
/**
* Product controller.
* Copyright © 2015 Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Unit3\SixModule\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Unit3\SixModule\Block\Template');
        $block->setTemplate('Unit3_SixModule::test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
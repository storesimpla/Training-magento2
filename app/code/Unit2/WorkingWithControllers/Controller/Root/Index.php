<?php
/**
* Product controller.
* Copyright © 2015 Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Unit2\WorkingWithControllers\Controller\Root;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        //$this->_redirect('catalog/category/view/id/1');
        $this->getResponse()->appendBody("HELLO WORLD");
    }
}
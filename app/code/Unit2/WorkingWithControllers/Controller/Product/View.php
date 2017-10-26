<?php

namespace Unit2\WorkingWithControllers\Controller\Product;

class View extends \Magento\Framework\App\Action\Action
{
    public function beforeExecute() {
      echo "BEFORE<BR>"; exit();
    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller,
    $result) {
     echo "AFTER"; exit();
    }
    public function execute()
    {
        exit();
    }
}
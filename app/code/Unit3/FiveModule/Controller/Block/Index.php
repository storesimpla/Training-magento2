<?php
namespace Unit3\FiveModule\Controller\Block;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Unit3\FiveModule\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
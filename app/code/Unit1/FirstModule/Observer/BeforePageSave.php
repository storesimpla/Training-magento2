<?php

namespace Unit1\FirstModule\Observer;

use Magento\Framework\Event\ObserverInterface;

class BeforePageSave implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $cmsPage = $observer->getEvent()->getData('data_object');
        $cmsPage->setTitle($cmsPage->getTitle() . 'Custom');
    }
}

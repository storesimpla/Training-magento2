<?php

namespace Unit1\FirstModule\Model\Plugin;


class ChangePrice
{     
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result+1;
    }
}

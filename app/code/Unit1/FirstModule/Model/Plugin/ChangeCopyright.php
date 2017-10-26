<?php

namespace Unit1\FirstModule\Model\Plugin;


class ChangeCopyright
{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return 'Customized copyright!';
    }
}

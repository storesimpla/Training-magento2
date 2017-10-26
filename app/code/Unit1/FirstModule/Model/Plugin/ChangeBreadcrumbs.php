<?php

namespace Unit1\FirstModule\Model\Plugin;


class ChangeBreadcrumbs
{     
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        //Переменная $crumbInfo['title'] имеет странный тип данных что с ней делать я не знаю
        //Как мне добавить (!)?
        //Magento\Framework\Phrase Object ( [text:Magento\Framework\Phrase:private] => Go to Home Page [arguments:Magento\Framework\Phrase:private] => Array ( ) )
        return [$crumbName, $crumbInfo];
    }
}

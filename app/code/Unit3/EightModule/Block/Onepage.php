<?php
namespace Unit3\EightModule\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
	{
        print_r($data);
        exit();
		parent::__construct($context);
	}
}
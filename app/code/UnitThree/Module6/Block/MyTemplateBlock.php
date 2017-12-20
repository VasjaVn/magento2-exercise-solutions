<?php

namespace UnitThree\Module6\Block;

class MyTemplateBlock extends \Magento\Framework\View\Element\Template
{
    public function sayHello() {
        return 'HELLO from "MyTemplateBlock"!!!';
    }
}
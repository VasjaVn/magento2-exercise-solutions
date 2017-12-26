<?php

namespace UnitThreeDotFive\Module2Task2\Block;

class Alert extends \Magento\Framework\View\Element\Template
{
    public function getFullActionName()
    {
        return $this->_request->getFullActionName();
    }
}
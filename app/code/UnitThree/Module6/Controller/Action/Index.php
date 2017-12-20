<?php

namespace UnitThree\Module6\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock('Magento\Framework\View\Element\Template');
        $block->setTemplate('UnitThree_Module6::template1.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
<?php

namespace UnitThree\Module6\Controller\Block;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock('UnitThree\Module6\Block\MyTemplateBlock');
        $block->setTemplate('UnitThree_Module6::template2.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
<?php

namespace UnitThree\Module6\Plugin;

use Magento\Catalog\Block\Product\View\Description as Subject;

class ProductDescription
{
    public function beforeToHtml(Subject $subject)
    {
        $subject->setTemplate('UnitThree_Module6::description.phtml');
    }
}
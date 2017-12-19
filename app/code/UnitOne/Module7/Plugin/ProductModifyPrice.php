<?php

namespace UnitOne\Module7\Plugin;

use Magento\Catalog\Model\Product as Subject;

class ProductModifyPrice
{
    public function afterGetPrice(Subject $subject, $result)
    {
        return ($result + 100.0);
    }
}
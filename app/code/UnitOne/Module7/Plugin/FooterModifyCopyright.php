<?php

namespace UnitOne\Module7\Plugin;

use Magento\Theme\Block\Html\Footer as Subject;

class FooterModifyCopyright
{
    public function afterGetCopyright(Subject $subject, $result)
    {
        return "Customized copyright!";
    }
}
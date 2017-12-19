<?php

namespace UnitOne\Module7\Plugin;

use Magento\Theme\Block\Html\Breadcrumbs as Subject;

class BreadcrumbsModifyCrumb
{
    const CRUMB_SUFIX = ' (!)';

    private $_objectManager;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    public function beforeAddCrumb(Subject $subject, $crumbName, $crumbInfo)
    {
        $modifiedCrumbInfo = $this->_modifiedCrumbInfo($crumbInfo);
        return array($crumbName, $modifiedCrumbInfo);
    }

    private function _modifiedCrumbInfo($crumbInfo)
    {
        $modifiedCrumbInfo = $crumbInfo;

        if(isset($modifiedCrumbInfo['link'])) {
            $phrase = $modifiedCrumbInfo['label'];
            $text = $phrase->getText() . self::CRUMB_SUFIX;
            $arguments = $phrase->getArguments();
            $modifiedCrumbInfo['label'] = $this->_objectManager->create('\Magento\Framework\Phrase', [ 'text' => $text, 'arguments' => $arguments ]);
        } else {
            $modifiedCrumbInfo['label'] = $modifiedCrumbInfo['label'] . self::CRUMB_SUFIX;
        }

        return $modifiedCrumbInfo;
    }
}
<?php

namespace UnitTwo\Module3\Controller;

class Router implements \Magento\Framework\App\RouterInterface
{
    protected $_actionFactory;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory)
    {
        $this->_actionFactory = $actionFactory;
    }

    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $path = $request->getPathInfo();
        if (preg_match("%^/(.*?)-(.*?)-(.*?)$%", $path, $m)) {
            $request->setPathInfo(sprintf("/%s/%s/%s", $m[1], $m[2], $m[3]));
            return $this->_actionFactory->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
        }
        return null;
    }
}
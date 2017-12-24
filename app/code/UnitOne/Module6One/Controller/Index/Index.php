<?php

namespace UnitOne\Module6One\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_test;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \UnitOne\Module6One\MagentoU\Test $test )
    {
        $this->_test = $test;
        parent::__construct($context);
    }

    public function execute()
    {
        echo 'data: <br/>';
        print_r($this->_test->getData());
        echo '<br/>----------------------------------------<br/>';
        echo 'justAParameter: ' . $this->_test->getJustAParameter();
        exit();
    }
}
<?php

namespace UnitTwo\Module2\Observer;

use Magento\Framework\Event\Observer;

class LogPageOutput implements \Magento\Framework\Event\ObserverInterface
{
    protected $_logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $this->_logger->addRecord(200, "-------------\n\n\n BODY \n\n\n" . $body);
    }
}
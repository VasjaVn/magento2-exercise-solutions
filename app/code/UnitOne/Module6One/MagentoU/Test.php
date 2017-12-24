<?php

namespace UnitOne\Module6One\MagentoU;

class Test
{
    protected $_productRepository;

    protected $_productFactory;

    protected $_session;

    protected $_moduleProductRepository;

    protected $_justAParameter;

    protected $_data;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        \UnitOne\Module6One\Api\ProductRepositoryInterface $moduleProductRepository,
        $justAParameter = "11111111",
        $data = "22222222")
    {
        $this->_productRepository = $productRepository;
        $this->_productFactory = $productFactory;
        $this->_session = $session;
        $this->_moduleProductRepository = $moduleProductRepository;
        $this->_justAParameter = $justAParameter;
        $this->_data = $data;
    }

    public function getJustAParameter()
    {
        return $this->_justAParameter;
    }

    public function getData()
    {
        return $this->_data;
    }
}
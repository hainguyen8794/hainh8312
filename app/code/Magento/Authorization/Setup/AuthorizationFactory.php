<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Authorization\Setup;

/**
 * Resource Setup Model
 */
class AuthorizationFactory
{
    /**
     * Role model factory
     *
     * @var \Magento\Authorization\Model\RoleFactory
     */
    protected $_roleCollectionFactory;

    /**
     * Factory for rules model
     *
     * @var \Magento\Authorization\Model\RulesFactory
     */
    protected $_rulesCollectionFactory;

    /**
     * Role model factory
     *
     * @var \Magento\Authorization\Model\RoleFactory
     */
    protected $_roleFactory;

    /**
     * Rules model factory
     *
     * @var \Magento\Authorization\Model\RulesFactory
     */
    protected $_rulesFactory;

    /**
     * Init
     *
     * @param \Magento\Authorization\Model\Resource\Role\CollectionFactory $roleCollectionFactory
     * @param \Magento\Authorization\Model\Resource\Rules\CollectionFactory $rulesCollectionFactory
     * @param \Magento\Authorization\Model\RoleFactory $roleFactory
     * @param \Magento\Authorization\Model\RulesFactory $rulesFactory
     */
    public function __construct(
        \Magento\Authorization\Model\Resource\Role\CollectionFactory $roleCollectionFactory,
        \Magento\Authorization\Model\Resource\Rules\CollectionFactory $rulesCollectionFactory,
        \Magento\Authorization\Model\RoleFactory $roleFactory,
        \Magento\Authorization\Model\RulesFactory $rulesFactory
    ) {
        $this->_roleCollectionFactory = $roleCollectionFactory;
        $this->_rulesCollectionFactory = $rulesCollectionFactory;
        $this->_roleFactory = $roleFactory;
        $this->_rulesFactory = $rulesFactory;
    }

    /**
     * Creates role collection
     *
     * @return \Magento\Authorization\Model\Resource\Role\Collection
     */
    public function createRoleCollection()
    {
        return $this->_roleCollectionFactory->create();
    }

    /**
     * Creates rules collection
     *
     * @return \Magento\Authorization\Model\Resource\Rules\Collection
     */
    public function createRulesCollection()
    {
        return $this->_rulesCollectionFactory->create();
    }

    /**
     * Creates role model
     *
     * @return \Magento\Authorization\Model\Role
     */
    public function createRole()
    {
        return $this->_roleFactory->create();
    }

    /**
     * Creates rules model
     *
     * @return \Magento\Authorization\Model\Rules
     */
    public function createRules()
    {
        return $this->_rulesFactory->create();
    }
}

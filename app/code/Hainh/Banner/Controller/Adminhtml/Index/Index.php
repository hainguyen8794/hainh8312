<?php
/**
 * Created by PhpStorm.
 * User: hainh
 * Date: 7/26/2018
 * Time: 3:18 PM
 */

namespace Hainh\Banner\Controller\Adminhtml\Index;

use Magento\Framework\App\Action\Context;

use Magento\Backend\App\Action;
class Index extends  Action
{
    protected $_resultPageFactory;
    protected $_registry;

    public function __construct(Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory,
                                \Magento\Framework\Registry $registry
      )
    {

        $this->_resultPageFactory = $resultPageFactory;
        $this->_registry = $registry;
        parent::__construct($context);
    }
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Hainh::banner_manager');
        $resultPage->getConfig()->getTitle()->prepend(__('Banner Manager'));
        return $resultPage;
    }
}
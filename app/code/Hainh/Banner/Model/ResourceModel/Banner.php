<?php
/**
 * Created by PhpStorm.
 * User: hainh
 * Date: 7/26/2018
 * Time: 4:18 PM
 */

namespace Hainh\Banner\Model\ResourceModel;



class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('banner', 'id');
    }
}
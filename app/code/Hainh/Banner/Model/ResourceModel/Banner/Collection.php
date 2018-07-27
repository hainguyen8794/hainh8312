<?php
/**
 * Created by PhpStorm.
 * User: hainh
 * Date: 7/26/2018
 * Time: 4:18 PM
 */

namespace Hainh\Banner\Model\ResourceModel\Banner;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Hainh\Banner\Model\Banner','Hainh\Banner\Model\ResourceModel\Banner');
    }
}
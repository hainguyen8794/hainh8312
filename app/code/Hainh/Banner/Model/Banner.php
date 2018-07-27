<?php
/**
 * Created by PhpStorm.
 * User: hainh
 * Date: 7/26/2018
 * Time: 4:14 PM
 */

namespace Hainh\Banner\Model;

use Hainh\Banner\Api\Data\BannerInterface;
class Banner extends \Magento\Framework\Model\AbstractModel implements BannerInterface
{
    const STATUS_ENABLE = 1;
    const STATUS_DISABLE = 0;
    protected function _construct(){
        $this->_init('Hainh\Banner\Model\ResourceModel\Banner');
    }
    function getID()
    {
        return $this->getData(self::BANNER_ID);
    }
    function getImage()
    {
        return $this->getData(self::IMAGE);
    }
    function getLink()
    {
        return $this->getData(self::LINK);
    }
    function setImage($image)
    {
        $this->setData(self::IMAGE,$image);
        return $this;
    }
    function setLink($link)
    {
        $this->setData(self::LINK,$link);
    }
}
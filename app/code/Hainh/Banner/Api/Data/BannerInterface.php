<?php
namespace Hainh\Banner\Api\Data;
interface BannerInterface{
    const BANNER_ID = "id";
    const IMAGE = "image";
    const LINK = "link";
    function getID();
    function getImage();
    function getLink();
    function setImage($image);
    function setLink($link);
}
<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 16:13
 */
namespace DesignPattern\Structural\Bridge;

class AquaTheme implements Theme
{
    public function getColor()
    {
        return '水母色';
    }
}
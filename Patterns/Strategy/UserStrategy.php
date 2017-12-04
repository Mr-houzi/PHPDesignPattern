<?php
/**
 * Created by PhpStorm.
 * User: hasee-pc
 * Date: 2017/11/22
 * Time: 16:48
 */

/**
 * 策略模式-接口
 *
 */

namespace Patterns\Strategy;


interface UserStrategy
{
    function showAd();
    function showCategory();
}
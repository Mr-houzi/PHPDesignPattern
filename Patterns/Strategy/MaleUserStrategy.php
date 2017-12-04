<?php
/**
 * Created by PhpStorm.
 * User: hasee-pc
 * Date: 2017/11/22
 * Time: 16:54
 */

/**
 * 策略模式-针对男性用户
 *
 */


namespace Patterns\Strategy;
use Patterns\Strategy\UserStrategy;


class MaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        return '坚果Pro2';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        return '电子产品';
    }
}
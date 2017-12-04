<?php
/**
 * Created by PhpStorm.
 * User: hasee-pc
 * Date: 2017/11/22
 * Time: 16:56
 */

/**
 * 策略模式-针对女性用户
 *
 */

namespace Patterns\Strategy;
use Patterns\Strategy\UserStrategy;

class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        return 'YSL口红';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        return '美妆';
    }
}
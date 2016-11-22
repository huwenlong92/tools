<?php
/**
 * Created by PhpStorm.
 * User: henly
 * Date: 2016/11/22
 * Time: 15:32
 */

namespace Henly\Tools;


class Integer
{

    public static function subInt($int1, $int2)
    {
        return ($int1 - $int2) > 0 ? $int1 - $int2 : 0;
    }

}
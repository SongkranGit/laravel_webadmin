<?php
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 6/10/2017
 * Time: 9:00 PM
 */

namespace App\Helpers;


class Helper
{

    public static function shout( $string)
    {
        return strtoupper($string);
    }

    public static function set_value($value){
        if(isset($value) && $value != null && $value !=''){
            return $value;
        }
        return '';
    }
}
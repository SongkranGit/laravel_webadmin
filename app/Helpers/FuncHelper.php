<?php
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 6/10/2017
 * Time: 9:09 PM
 */
if (!function_exists('set_value')) {
    function set_value($value)
    {
        if (isset($value) && $value != null && $value != '') {
            return $value;
        }
        return '';
    }
}


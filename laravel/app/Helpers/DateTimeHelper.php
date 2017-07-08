<?php

namespace App\Helpers;



class DateTimeHelper
{
    public static function currentDateTime(){
        $dt = new \DateTime();
        return $dt->format('m-d-y H:i:s');
    }

    public static function convertDateToMysqlDate($date)
    {
        if ($date != NULL && $date != '') {
            return date('Y-m-d', strtotime($date));
        } else {
            return "";
        }
    }

    public static function convertDateTimeToMysqlDateTime($dateTime)
    {
        if ($dateTime != NULL && $dateTime != '') {
            return date('Y-m-d H:i:s', strtotime($dateTime));
        } else {
            return "";
        }
    }

    public static function convertThaiDateToMysql($thaiDate)
    {
        if ($thaiDate != null && $thaiDate != '') {
            $thaiDate = self::convertYear($thaiDate);
            return self::convertDateToMysqlDate($thaiDate);
        }
        return '';
    }

    public static function convertToThaiDate($date)
    {
        if ($date != null && $date != '') {
            $date_formatted = date("Y-m-d", strtotime($date));
            $thaiDate = self::thai_date($date_formatted);
           // dump(date("Y-m-d", strtotime($date)));
            return $thaiDate;
        }
        return '';
    }

    public static  function getCurrentYear()
    {
        return date("Y");
    }
}
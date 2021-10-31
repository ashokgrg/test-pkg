<?php

namespace Jobins\Date;

class CustomDate
{
    public static function generateJapaneseDate(string $date)
    {
        $year                 = date('Y', strtotime($date));
        $month                = date('m', strtotime($date));
        $day                  = date('d', strtotime($date));
        return $year."年".$month."月".$day."日";
    }
}

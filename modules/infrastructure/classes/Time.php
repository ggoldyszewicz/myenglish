<?php defined('SYSPATH') OR die('No direct script access.');

class Time
{
    public static function getMonthsSelect()
    {
        return array(
            '0' => __('Select'),
            '1' => __('January'),
            '2' => __('February'),
            '3' => __('March'),
            '4' => __('April'),
            '5' => __('May'),
            '6' => __('June'),
            '7' => __('July'),
            '8' => __('August'),
            '9' => __('September'),
            '10' => __('October'),
            '11' => __('November'),
            '12' => __('December'),
        );
    }
    
    public static function getMonthName($id)
    {
        $months = Time::getMonthsSelect();
        return $id > 0 && isset($months[$id]) ? $months[$id] : null;
    }
    
    public static function getNow()
    {
        $d = date('d');
        $m = date('m');
        $Y = date('Y');
        $h = date('h');
        $i = date('i');
        $s = date('s');
        return $Y.'-'.$m .'-'.$d.'_'.$h.'-'.$i.'-'.$s;
    }
}
<?php defined('SYSPATH') OR die('No direct script access.');

class Infrastructure
{
    public static function getColours()
    {
        return array(
            "#000" => 'black',
            "#beb7b1" => 'silver',
            "#72797f" => 'gray',
            "#e6edf3" => 'white',
            "#ba3428" => 'red',
            "#4a7aa0" => 'blue',
            "#9d7b4b" => 'brown',
            "#423c40" => 'graphite',
            "#727c40" => 'green',
            "#ecee3f" => 'yellow',
            "#fb8e79" => 'other',
        );
    }
    
    public static function getColoursSelect()
    {
        $return = array(
            "#000" => __('black'),
            "#beb7b1" => __('silver'),
            "#72797f" => __('gray'),
            "#e6edf3" => __('white'),
            "#ba3428" => __('red'),
            "#4a7aa0" => __('blue'),
            "#9d7b4b" => __('brown'),
            "#423c40" => __('graphite'),
            "#727c40" => __('green'),
            "#ecee3f" => __('yellow'),
            "#fb8e79" => __('other'),
        );        
        
        return $return;
    }
    
    public static function getRangeSelect($from, $to)
    {
        $a = array(
            0 => __('Select')
        );
        if((int)$from <= (int)$to)
        {
            for($i = (int)$from; $i < ((int)$to + 1); $i++)
            {
                $a[$i] = $i;
            }
        }
        else
        {
            for($i = (int)$from; $i > ((int)$to - 1); $i--)
            {
                $a[$i] = $i;
            }
        }
        return $a;
    }
    
    public static function getContractTypesSelect()
    {
        return array(
            '1.000' => '8/8',
            '0.875' => '7/8',
            '0.750' => '6/8',
            '0.625' => '5/8',
            '0.500' => '4/8',
            '0.375' => '3/8',
            '0.250' => '2/8',
            '0.125' => '1/8',
        );
    }
    
    public static function substr($string, $length = null)
    {
        if($length == null)
        {
            $length = 20;
        }
        return strlen(trim($string)) > $length ? substr(trim($string), 0, $length).' ...' : trim($string);
    }
}
<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Worktime
{
    public static function getAll()
    {        
        return ORM::factory('Worktime')
            -> order_by('year', 'ASC')
            -> order_by('month', 'ASC')
            -> find_all();
    }
    
    public static function add($post)
    {
        $year = (int)Protection::clear_str($post['year']);
        $month = (int)Protection::clear_str($post['month']);
        $workdays = (int)Protection::clear_str($post['workdays']);
        if(Db_Worktime::checkUnique($year, $month))
        {
            $advert = ORM::factory('Worktime');
            $advert -> year = $year;
            $advert -> month = $month;
            $advert -> workdays = $workdays;
            $advert -> save();
        }
    }
    
    public static function checkUnique($year, $month)
    {
        $item = ORM::factory('Worktime')
            -> where('year', '=', $year) 
            -> where('month', '=', $month)
            -> find();
        return isset($item -> id) ? false : true;
    }
    
    public static function cloneAdvert($advert_id)
    {
        $oldadvert = Db_Advert::get($advert_id);
        
        if(isset($oldadvert -> id) && $oldadvert -> id > 0)
        {
            $advert = ORM::factory('Advert');
            $advert -> brand_id = $oldadvert -> brand_id;
            $advert -> model_id = $oldadvert -> model_id;
            $advert -> version_id = $oldadvert -> version_id;
            //$advert -> name = $name;
            $advert -> additional_description = $oldadvert -> additional_description;
            $advert -> year = $oldadvert -> year;
            $advert -> vehicle_type_id = $oldadvert -> vehicle_type_id;
            $advert -> fuel_id = $oldadvert -> fuel_id;
            $advert -> gearbox_id = $oldadvert -> gearbox_id;
            $advert -> doors_number = $oldadvert -> doors_number;
            $advert -> engine_capacity = $oldadvert -> engine_capacity;
            $advert -> power = $oldadvert -> power;
            //$advert -> vin = $vin;
            $advert -> colour = $oldadvert -> colour;
            $advert -> colour_name = $oldadvert -> colour_name;
            $advert -> price = $oldadvert -> price;
            $advert -> discount_value = $oldadvert -> discount_value;
            //$advert -> percent_discount = $percent_discount;
            $advert -> installment = $oldadvert -> installment;
            $advert -> additional_equipment = $oldadvert -> additional_equipment;

            $advert -> is_metalic = $oldadvert -> is_metalic;
            $advert -> is_front = $oldadvert -> is_front;
            $advert -> at_front = $oldadvert -> at_front;
            $advert -> set_discount = $oldadvert -> set_discount;
            
            $advert -> have_vat = $oldadvert -> have_vat;
            $advert -> have_warranty = $oldadvert -> have_warranty;
            $advert -> without_progress = $oldadvert -> without_progress;
            
            $advert -> save();
        }
    }
    
    public static function get($id)
    {
        return ORM::factory('Worktime')
            -> select('*')
            -> where('id', '=', $id)
            -> find();
    }
    
    public static function update($post)
    {
        $worktime_id = (int)Protection::clear_str($post['worktime_id']);
        $workdays = (int)Protection::clear_str($post['workdays']);
        if($worktime_id > 0)
        {
            DB::update('worktimes')->set(array(
                'workdays' => $workdays,
                ))
            -> where('id', '=', $worktime_id)
            -> execute();
        }
    }
    
    public static function delete($worktime_id)
    {
        if($worktime_id > 0)
        {
            $worktime = ORM::factory('Worktime', $worktime_id);
            $worktime -> delete();
        }
    }
}
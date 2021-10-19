<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Vehicle_Type
{
    public static function getAll()
    {        
        return ORM::factory('Vehicle_Type')
            -> find_all();
    }
    
    public static function getAllSelect()
    {
        $return = array(
            0 => __('Select')
        );
        $vehicle_types = Db_Vehicle_Type::getAll();
        foreach($vehicle_types as $v)
        {
            $return[$v -> id] = $v -> name;
        }
        return $return;
    }
    
    public static function get($vehicle_type_id)
    {
        return ORM::factory('Vehicle_Type')
            -> where('id', '=', $vehicle_type_id)
            -> find();
    }
    
    public static function add($post)
    {
        $name = Protection::clear_str($post['name']);
        if($name != '')
        {
            $vehicle_type = ORM::factory('Vehicle_Type');
            $vehicle_type -> name = $name;
            $vehicle_type -> save();
        }
    }
    
    public static function update($post)
    {
        $id = (int)Protection::clear_str($post['vehicle_type_id']);
        $name = Protection::clear_str($post['name']);
        
        if($id > 0)
        {
            DB::update('vehicle_types')->set(array(
                'name' => $name,
                ))
            -> where('id', '=', $id)
            -> execute();
        }
    }
    
    public static function delete($vehicle_type_id)
    {
        if($vehicle_type_id > 0)
        {            
            $vehicle_type = ORM::factory('Vehicle_Type', $vehicle_type_id);
            $vehicle_type -> delete();
        }
    }
}
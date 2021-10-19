<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Fuel_Type
{
    public static function getAll()
    {        
        return ORM::factory('Fuel_Type')
            -> find_all();
    }
    
    public static function getAllSelect()
    {
        $return = array(
            0 => __('Select')
        );
        $fuel_types = Db_Fuel_Type::getAll();
        foreach($fuel_types as $v)
        {
            $return[$v -> id] = $v -> name;
        }
        return $return;
    }
    
    public static function get($fuel_type_id)
    {
        return ORM::factory('Fuel_Type')
            -> where('id', '=', $fuel_type_id)
            -> find();
    }
    
    public static function add($post)
    {
        $name = Protection::clear_str($post['name']);
        if($name != '')
        {
            $fuel_type = ORM::factory('Fuel_Type');
            $fuel_type -> name = $name;
            $fuel_type -> save();
        }
    }
    
    public static function update($post)
    {
        $id = (int)Protection::clear_str($post['fuel_type_id']);
        $name = Protection::clear_str($post['name']);
        
        if($id > 0)
        {
            DB::update('fuel_types')->set(array(
                'name' => $name,
                ))
            -> where('id', '=', $id)
            -> execute();
        }
    }
    
    public static function delete($fuel_type_id)
    {
        if($fuel_type_id > 0)
        {            
            $fuel_type = ORM::factory('Fuel_Type', $fuel_type_id);
            $fuel_type -> delete();
        }
    }
    
    public static function getName($fuel_type_id)
    {
        $type = Db_Fuel_Type::get($fuel_type_id);
        return $type -> name;
    }
}
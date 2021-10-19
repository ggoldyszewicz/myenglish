<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Additional_Equipment
{
    public static function getAll()
    {        
        return ORM::factory('Additional_Equipment')
            -> order_by('name', 'ASC')
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
    
    public static function get($additional_equipment_id)
    {
        return ORM::factory('Additional_Equipment')
            -> where('id', '=', $additional_equipment_id)
            -> find();
    }
    
    public static function add($post)
    {
        $name = Protection::clear_str($post['name']);
        if($name != '')
        {
            $vehicle_type = ORM::factory('Additional_Equipment');
            $vehicle_type -> name = $name;
            $vehicle_type -> save();
        }
    }
    
    public static function update($post)
    {
        $id = (int)Protection::clear_str($post['additional_equipment_id']);
        $name = Protection::clear_str($post['name']);
        
        if($id > 0)
        {
            DB::update('additional_equipments')->set(array(
                'name' => $name,
                ))
            -> where('id', '=', $id)
            -> execute();
        }
    }
    
    public static function delete($additional_equipment_id)
    {
        if($additional_equipment_id > 0)
        {            
            $additional_equipment = ORM::factory('Additional_Equipment', $additional_equipment_id);
            $additional_equipment -> delete();
        }
    }
}
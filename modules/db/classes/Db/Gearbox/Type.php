<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Gearbox_Type
{
    public static function getAll()
    {        
        return ORM::factory('Gearbox_Type')
            -> find_all();
    }
    
    public static function getAllSelect()
    {
        $return = array(
            0 => __('Select')
        );
        $gearbox_types = Db_Gearbox_Type::getAll();
        foreach($gearbox_types as $v)
        {
            $return[$v -> id] = $v -> name;
        }
        return $return;
    }
    
    public static function get($gearbox_type_id)
    {
        return ORM::factory('Gearbox_Type')
            -> where('id', '=', $gearbox_type_id)
            -> find();
    }
    
    public static function add($post)
    {
        $name = Protection::clear_str($post['name']);
        if($name != '')
        {
            $gearbox_type = ORM::factory('Gearbox_Type');
            $gearbox_type -> name = $name;
            $gearbox_type -> save();
        }
    }
    
    public static function update($post)
    {
        $id = (int)Protection::clear_str($post['gearbox_type_id']);
        $name = Protection::clear_str($post['name']);
        
        if($id > 0)
        {
            DB::update('gearbox_types')->set(array(
                'name' => $name,
                ))
            -> where('id', '=', $id)
            -> execute();
        }
    }
    
    public static function delete($gearbox_type_id)
    {
        if($gearbox_type_id > 0)
        {            
            $gearbox_type = ORM::factory('Gearbox_Type', $gearbox_type_id);
            $gearbox_type -> delete();
        }
    }
}
<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Brand
{
    public static function getAll()
    {        
        return ORM::factory('Brand')
            -> find_all();
    }
    
    public static function getName($brand_id)
    {
        $brand = Db_Brand::get($brand_id);
        return $brand -> name;
    }
    
    public static function getAllSelect()
    {
        $return = array(
            0 => __('Select')
        );
        $brands = Db_Brand::getAll();
        foreach($brands as $v)
        {
            $return[$v -> id] = $v -> name;
        }
        return $return;
    }
    
    public static function add($post)
    {
        $name = Protection::clear_str($post['name']);
        if($name != '')
        {
            $brand = ORM::factory('Brand');
            $brand -> name = $name;
            $brand -> save();
        }
    }
    
    public static function get($brand_id)
    {
        return ORM::factory('Brand')
            -> select('*')
            -> where('id', '=', $brand_id)
            -> find();
    }
    
    public static function update($post)
    {
        $id = (int)Protection::clear_str($post['brand_id']);
        $name = Protection::clear_str($post['name']);
        
        if($id > 0)
        {
            DB::update('brands')->set(array(
                'name' => $name,
                ))
            -> where('id', '=', $id)
            -> execute();
        }
    }
    
    public static function delete($brand_id)
    {
        if($brand_id > 0)
        {
            DB::delete('brands_models_versions')
                    -> where('brand_id', '=', $brand_id)
                    -> execute();
            
            DB::delete('brands_models')
                    -> where('brand_id', '=', $brand_id)
                    -> execute();
            
            $user = ORM::factory('Brand', $brand_id);
            $user -> delete();
        }
    }
}
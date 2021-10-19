<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Brand_Model_Version
{
    public static function getAll()
    {        
        return ORM::factory('Brand')
            -> find_all();
    }
    
    public static function getVersions($brand_id, $model_id)
    {
        return ORM::factory('Brands_Models_Version')
            -> where('brand_id', '=', $brand_id)
            -> where('model_id', '=', $model_id)
            -> find_all();
    }
    
    public static function getVersionsSelect($brand_id, $model_id)
    {
        $return = array(
            0 => __('Select')
        );
        $versions = Db_Brand_Model_Version::getVersions($brand_id, $model_id);
        foreach($versions as $v)
        {
            $return[$v -> id] = $v -> name;
        }
        return $return;
    }
    
    public static function getVersionsSelectString($brand_id, $model_id)
    {
        $return = '<select id="version" name="version_id"><option value="0">'.__('Select').'</option>';
        $versions = Db_Brand_Model_Version::getVersions($brand_id, $model_id);
        foreach($versions as $v)
        {
            $return .= '<option value="'.$v -> id.'">'.$v -> name.'</option>';
        }
        
        $return .= '</select>';
        return $return;
    }
    
    public static function getName($version_id)
    {
        $version = Db_Brand_Model_Version::get($version_id);
        return $version -> name;
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
        $brand_id = (int)Protection::clear_str($post['brand_id']);
        $model_id = (int)Protection::clear_str($post['model_id']);
        $name = Protection::clear_str($post['name']);
        
        if($name != '' && $brand_id > 0)
        {
            $version = ORM::factory('Brands_Models_Version');
            $version -> brand_id = $brand_id;
            $version -> model_id = $model_id;
            $version -> name = $name;
            $version -> save();
        }
    }
    
    public static function get($version_id)
    {
        return ORM::factory('Brands_Models_Version')
            -> select('*')
            -> where('id', '=', $version_id)
            -> find();
    }
    
    public static function update($post)
    {
        $id = (int)Protection::clear_str($post['version_id']);
        $name = Protection::clear_str($post['name']);
        
        if($id > 0)
        {
            DB::update('brands_models_versions')->set(array(
                'name' => $name,
                ))
            -> where('id', '=', $id)
            -> execute();
        }
    }
    
    public static function delete($version_id)
    {
        if($version_id > 0)
        {
            $version = ORM::factory('Brands_Models_Version', $version_id);
            $version -> delete();
        }
    }
}
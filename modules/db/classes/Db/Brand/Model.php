<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Brand_Model
{
    public static function getAll()
    {        
        return ORM::factory('Brand')
            -> find_all();
    }
    
    public static function getModels($brand_id)
    {
        return ORM::factory('Brands_Model')
            -> where('brand_id', '=', $brand_id)
            -> find_all();
    }
    
    public static function getModelsSelect($brand_id)
    {
        $return = array(
            0 => __('Select')
        );
        $models = Db_Brand_Model::getModels($brand_id);
        foreach($models as $v)
        {
            $return[$v -> id] = $v -> name;
        }
        return $return;
    }
    
    public static function getModelsSelectString($brand_id)
    {
        $return = '<select id="model" name="model_id"><option value="0">'.__('Select').'</option>';
        $models = Db_Brand_Model::getModels($brand_id);
        foreach($models as $m)
        {
            $return .= '<option value="'.$m -> id.'">'.$m -> name.'</option>';
        }
        
        $return .= '</select>';
        return $return;
    }
    
    public static function getName($model_id)
    {
        $model = Db_Brand_Model::get($model_id);
        return $model -> name;
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
        $name = Protection::clear_str($post['name']);
        
        if($name != '' && $brand_id > 0)
        {
            $model = ORM::factory('Brands_Model');
            $model -> brand_id = $brand_id;
            $model -> name = $name;
            $model -> save();
        }
    }
    
    public static function get($model_id)
    {
        return ORM::factory('Brands_Model')
            -> select('*')
            -> where('id', '=', $model_id)
            -> find();
    }
    
    public static function update($post)
    {
        $id = (int)Protection::clear_str($post['model_id']);
        $name = Protection::clear_str($post['name']);
        
        if($id > 0)
        {
            DB::update('brands_models')->set(array(
                'name' => $name,
                ))
            -> where('id', '=', $id)
            -> execute();
        }
    }
    
    public static function delete($model_id)
    {
        if($model_id > 0)
        {
            DB::delete('brands_models_versions')
                    -> where('model_id', '=', $model_id)
                    -> execute();
            
            $model = ORM::factory('Brands_Model', $model_id);
            $model -> delete();
            
            
        }
    }
}
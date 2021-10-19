<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_New
{
    public static function getAll()
    {        
        return ORM::factory('New')
            -> find_all();
    }
    
    public static function get($new_id)
    {
        return ORM::factory('New')
            -> select('*')
            -> where('id', '=', $new_id)
            -> find();
    }
    
    public static function update($post)
    {
        $header = Protection::clear_str($post['header']);
        $content = Protection::clear_str($post['content']);
        $new_id = (int)Protection::clear_str($post['new_id']);
        
        if($new_id > 0)
        {
            DB::update('news')->set(array(
                'header' => $header,
                'content' => $content,
                ))
            -> where('id', '=', $new_id)
            -> execute();
        }
    }
    
    public static function add($post)
    {
        $header = Protection::clear_str($post['header']);
        $content = Protection::clear_str($post['content']);
        if($header != '' && $content != '')
        {
            $brand = ORM::factory('New');
            $brand -> header = $header;
            $brand -> content = $content;
            $brand -> save();
        }
    }
    
    public static function delete($new_id)
    {
        if($new_id > 0)
        {
            $new = ORM::factory('New', $new_id);
            $new -> delete();
        }
    }
}
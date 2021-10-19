<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Opinion
{
    public static function getAll()
    {        
        return ORM::factory('Opinion')
            -> find_all();
    }
    
    public static function get($opinion_id)
    {
        return ORM::factory('Opinion')
            -> select('*')
            -> where('id', '=', $opinion_id)
            -> find();
    }
    
    public static function update($post)
    {
        $header = Protection::clear_str($post['header']);
        $content = Protection::clear_str($post['content']);
        $opinion_id = (int)Protection::clear_str($post['opinion_id']);
        
        if($opinion_id > 0)
        {
            DB::update('opinions')->set(array(
                'header' => $header,
                'content' => $content,
                ))
            -> where('id', '=', $opinion_id)
            -> execute();
        }
    }
    
    public static function add($post)
    {
        $header = Protection::clear_str($post['header']);
        $content = Protection::clear_str($post['content']);
        if($header != '' && $content != '')
        {
            $brand = ORM::factory('Opinion');
            $brand -> header = $header;
            $brand -> content = $content;
            $brand -> save();
        }
    }
    
    public static function delete($opinion_id)
    {
        if($opinion_id > 0)
        {
            $new = ORM::factory('Opinion', $opinion_id);
            $new -> delete();
        }
    }
}
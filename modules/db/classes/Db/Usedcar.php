<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Usedcar
{
    public static function getAll()
    {        
        return ORM::factory('Usedcar')
            -> find_all();
    }
    
    public static function get($usedcar_id)
    {
        return ORM::factory('Usedcar')
            -> select('*')
            -> where('id', '=', $usedcar_id)
            -> find();
    }
    
    public static function update($post)
    {
        $header = Protection::clear_str($post['header']);
        $content = $post['content'];
        $usedcar_id = (int)Protection::clear_str($post['usedcar_id']);
        
        if($usedcar_id > 0)
        {
            DB::update('usedcars')->set(array(
                'header' => $header,
                'content' => $content,
                ))
            -> where('id', '=', $usedcar_id)
            -> execute();
        }
    }
    
    public static function add($post)
    {
        $header = Protection::clear_str($post['header']);
        $content = $post['content'];
        if($header != '')
        {
            $faq = ORM::factory('Usedcar');
            $faq -> header = $header;
            $faq -> content = $content;
            $faq -> save();
        }
    }
    
    public static function delete($usedcar_id)
    {
        if($usedcar_id > 0)
        {
            $faq = ORM::factory('Usedcar', $usedcar_id);
            $faq -> delete();
        }
    }
}
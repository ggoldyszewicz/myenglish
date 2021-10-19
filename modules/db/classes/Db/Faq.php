<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Faq
{
    public static function getAll()
    {        
        return ORM::factory('Faq')
            -> find_all();
    }
    
    public static function get($faq_id)
    {
        return ORM::factory('Faq')
            -> select('*')
            -> where('id', '=', $faq_id)
            -> find();
    }
    
    public static function update($post)
    {
        $header = Protection::clear_str($post['header']);
        $content = Protection::clear_str($post['content']);
        $faq_id = (int)Protection::clear_str($post['faq_id']);
        
        if($faq_id > 0)
        {
            DB::update('faqs')->set(array(
                'header' => $header,
                'content' => $content,
                ))
            -> where('id', '=', $faq_id)
            -> execute();
        }
    }
    
    public static function add($post)
    {
        $header = Protection::clear_str($post['header']);
        $content = Protection::clear_str($post['content']);
        if($header != '' && $content != '')
        {
            $faq = ORM::factory('Faq');
            $faq -> header = $header;
            $faq -> content = $content;
            $faq -> save();
        }
    }
    
    public static function delete($faq_id)
    {
        if($faq_id > 0)
        {
            $faq = ORM::factory('Faq', $faq_id);
            $faq -> delete();
        }
    }
}
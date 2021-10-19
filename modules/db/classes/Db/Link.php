<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Link
{
    public static function getAll()
    {        
        return ORM::factory('Link')
            -> find_all();
    }
    
    public static function getHref($link_id)
    {
        $link = Db_Link::get($link_id);
        return $link -> href;
    }
    
    public static function add($post)
    {
        
        $name = Protection::clear_str($post['name']);
        $href = $post['href'];
        $position = (int)Protection::clear_str($post['position']);
        if($href != '')
        {
            $link = ORM::factory('Link');
            $link -> name = $name;
            $link -> href = $href;
            $link -> position = $position;
            $link -> save();
        }
    }
    
    public static function get($link_id)
    {
        return ORM::factory('Link')
            -> select('*')
            -> where('id', '=', $link_id)
            -> find();
    }
    
    public static function update($post)
    {
        $id = (int)Protection::clear_str($post['link_id']);
        $name = Protection::clear_str($post['name']);
        $href = $post['href'];
        $position = (int)Protection::clear_str($post['position']);
        
        if($id > 0)
        {
            DB::update('links')->set(array(
                'name' => $name,
                'href' => $href,
                'position' => $position,
                ))
            -> where('id', '=', $id)
            -> execute();
        }
    }
    
    public static function delete($link_id)
    {
        if($link_id > 0)
        {
            $link = ORM::factory('Link', $link_id);
            $link -> delete();
        }
    }
}
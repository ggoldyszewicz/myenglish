<?php
defined('SYSPATH') OR die('No direct access allowed.');

class Db_Content 
{
    public static function getCategoryContent($category_id)
    {
        return ORM::factory('Word')
            -> join('categories','LEFT')
            -> on('categories.category_id', '=', 'word.category_id')
            -> select('*')
            -> where('categories.category_id', '=', $category_id)
            ->where('word.deleted', '=', 0)
            -> find_all()
            -> as_array();
    }
    
    public static function get($content_id)
    {
        return ORM::factory('Word')
            ->join('categories','LEFT')
            ->on('categories.category_id', '=', 'word.category_id')
            ->select('*')
            ->where('word.id', '=', $content_id)
            ->find();
    }
    
    public static function update($post)
    {
        DB::update('words')
            ->set(array(
                'word'=>$post['word'],
                'category_id'=>(int)$post['parent'],
                'translation'=>$post['translation']
            ))
            ->where('id','=',(int)$post['content_id'])
            ->execute();
    }
    
    public static function delete($content_id)
    {
        DB::update('words')
            ->set(array(
                'deleted'=>1,
            ))
            ->where('id','=',(int)$content_id)
            ->execute();
        /*
        DB::delete('words')
            ->where('id','=',(int)$content_id)
            ->execute();
         * 
         */
    }
    
    public static function getContentCategory($content_id)
    {
        $content = Db_Content::get($content_id);
        return $content -> category_id;
    }
}
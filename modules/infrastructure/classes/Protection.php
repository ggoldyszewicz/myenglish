<?php defined('SYSPATH') OR die('No direct script access.');

class Protection
{
    public static function clear_str($string)
    {
        $string = Security::encode_php_tags($string);
        $string = Security::strip_image_tags($string);

        return $string;
    }
    
    public static function isUsernameUnique($user_id, $username, $email)
    {
        $user = ORM::factory('user');
        $result = $user
            -> select('*')
            -> where_open()
            -> where('username', '=', $username)
            -> or_where('email', '=', $email)
            -> where_close()
            -> where('id', '!=', $user_id)
            -> find()->as_array();
        return isset($result['id']) ? false : true;
    }
    
}
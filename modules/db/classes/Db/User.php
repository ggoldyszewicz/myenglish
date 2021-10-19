<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_User
{
    public static function getAll()
    {
        return ORM::factory('user')

            -> join('users_additionals','LEFT')
            -> on('users_additionals.id','=','user.id')
            -> select('*')
            -> select(array('users_additionals.surname','surname'), array('users_additionals.name','name'))
            -> find_all();	
    }
    
    public static function add($post)
    {
        $user = ORM::factory('user');
        $user -> username = $post['login'];
        $user -> email = $post['email'];
        $user -> password = $post['password'];
        $user -> save();
        $user -> add('roles', ORM::factory('role', array('name' => 'login')));
        return $user -> pk();
    }
    
    public static function addAdditional($user_id, $post)
    {
        $description = isset($post['description']) ? $post['description'] : '';
        
        $useradditional = ORM::factory('Users_Additional');
        $useradditional -> id = $user_id;
        $useradditional -> name = $post['name'];
        $useradditional -> surname = $post['surname'];
        $useradditional -> description = $description;
        $useradditional -> save();
    }
    
    public static function updateRoles($user_id, $post)
    {
        $user = ORM::factory('user')
                -> where('user.id', '=', $user_id)
                -> find();
        
        if(isset($post['is_administrator']) && $post['is_administrator'] == 1)
        {
            if(!$user->has('roles', ORM::factory('role', array('name' => 'admin'))))
            {
                $user -> add('roles', ORM::factory('role', array('name' => 'admin')));
            }
        }
        else
        {
            $user -> remove('roles', ORM::factory('role', array('name' => 'admin')));
        }
    }
    
public static function updatePermissions($user_id, $post)
    {
        $permissions = array(
            'reading',
            'adding',
            'editing',
            'deleting',
            'haveprivate'
        );
        
        foreach($permissions as $p)
        {
            if(isset($post[$p]) && $post[$p] == 1)
            {
                if(!Db_User::havePermission($user_id, $p))
                {
                    Db_User::addPermission($user_id, $p);
                }
            }
            else
            {
                Db_User::deletePermission($user_id, $p);
            }
        }
        
    }
    
    public static function update($user_id, $post)
    {
        DB::update('users')->set(array(
            'username' => $post['login'],
            'email' => $post['email'],
            ))
        -> where('id','=',(int)$user_id)
        -> execute();
    }  
    
    public static function updateAdditional($user_id, $post)
    {
        $description = isset($post['description']) ? $post['description'] : '';
        
        DB::update('users_additionals')->set(array(
            'name' => $post['name'],
            'surname' => $post['surname'],
            'description' => $description,
            ))
        -> where('id','=',(int)$user_id)
        -> execute();
    }
    
    public static function addPermission($user_id, $permission)
    {
        $permission = ORM::factory('Permission')
            -> select('*')
            -> where('name', '=', $permission)
            -> find()
            ->as_array();
        if(count($permission) > 0)
        {
            $permission_id = $permission['id'];
            
            $user = ORM::factory('Users_Permission');
            $user -> user_id = $user_id;
            $user -> permission_id = $permission_id;
            $user -> save();
        }
    }
    
    public static function deletePermission($user_id, $permission)
    {
        $permission = ORM::factory('Permission')
            -> select('*')
            -> where('name', '=', $permission)
            -> find()
            ->as_array();
        if(count($permission) > 0)
        {
            $permission_id = $permission['id'];
            
            DB::delete('users_permissions')
                -> where('user_id', '=', $user_id)
                -> where('permission_id', '=', $permission_id)
                -> execute();
        }
    }    
    
    public static function addClinic($post)
    {
        $user = ORM::factory('user');
        $user -> username = $post['username'];
        $user -> email = $post['email'];
        $user -> password = $post['password'];
        $user -> save();
        $user -> add('roles', ORM::factory('role', array('name' => 'login')));
        $user -> add('roles', ORM::factory('role', array('name' => 'clinic')));
        return $user -> pk();
    }
    
    public static function addMainClinic($post)
    {
        $user = ORM::factory('user');
        $user -> username = $post['username'];
        $user -> email = $post['email'];
        $user -> password = $post['password'];
        $user -> save();
        $user -> add('roles', ORM::factory('role', array('name' => 'login')));
        $user -> add('roles', ORM::factory('role', array('name' => 'mainclinic')));
        return $user -> pk();
    }    

    public static function updateUser($post,$user_id)
    {
        DB::update('users')->set(array(
            'username' => $post['username'],
            'email' => $post['email'],
            ))
        -> where('id','=',(int)$user_id)
        -> execute();	
    }

    public static function updateUserPassword($user_id,$password)
    {
            $password = Auth::instance()->hash_password($password);
            DB::update('users')->set(array(
                    'password' => $password
                    ))
                    ->where('id','=',(int)$user_id)
                    ->execute();		
    }
    
    public static function get($user_id)
    {
        return ORM::factory('user')
            -> join('users_additionals', 'LEFT')
            -> on('users_additionals.id', '=', 'user.id')
            -> select('*')
            -> where('user.id', '=', $user_id)
            -> find();
    }
    
    public static function checkUniqueUsername($username, $email, $user_id)
    {
        $return = true;
        $user = ORM::factory('user')
            -> select('*')
            ->where_open()
            -> where('username', '=', $username)
            ->or_where('email', '=', $email)
            ->where_close()
                ->where('id', '!=', $user_id)
            -> find()
            -> as_array();
        if(isset($user['id']))
        {
            $return = true;
        }
        else
        {
            $return = false;
        }
        return $return;
    }
    
    public static function delete($user_id)
    {
        DB::delete('users_additionals')
            -> where('id', '=', $user_id)
            -> execute();
        
        $result = ORM::factory('user')
            -> where('user.id', '=', $user_id)
            -> find();
        
        foreach ($result -> roles -> find_all() as $role)
        {
            $result -> remove('roles', $role);
        }
        
        DB::delete('users')
            -> where('id', '=', $user_id)
            -> execute();
    }
    
    public static function havePermission($user_id, $permission)
    {
        $users_permissions = ORM::factory('Users_Permission')
            -> join('permissions','LEFT')
            -> on('permission_id', '=', 'permissions.id')
            -> select('*')
            -> where('user_id', '=', $user_id)
            -> where('name', '=', $permission)
            -> find_all()
            -> as_array();
        return count($users_permissions) > 0 ? true : false;
    }
}
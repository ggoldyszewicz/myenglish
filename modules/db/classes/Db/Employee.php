<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Employee
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
        $user_id = 0;
        $user = ORM::factory('user');
        $user -> username = $post['username'];
        $user -> email = $post['email'];
        $user -> password = $post['password'];
        $user -> save();
        $user -> add('roles', ORM::factory('role', array('name' => 'login')));
        $user -> add('roles', ORM::factory('role', array('name' => 'employee')));
        if(isset($post['manager']) && $post['manager'] == 1)
        {
            $user -> add('roles', ORM::factory('role', array('name' => 'manager')));
        }
        if(isset($post['administrator']) && $post['administrator'] == 1)
        {
            $user -> add('roles', ORM::factory('role', array('name' => 'admin')));
        }
        $user_id = $user -> pk();
        
        $users_additional = ORM::factory('Users_Additional');
        $users_additional -> id = $user_id;
        $users_additional -> name = $post['name'];
        $users_additional -> surname = $post['surname'];
        $users_additional -> save();
        
        $contract = ORM::factory('Contract');
        $contract -> user_id = $user_id;
        $contract -> from = $post['from'];
        $contract -> to = $post['to'];
        $contract -> worktime_part = $post['contract_type'];
        $contract -> manager_id = $post['manager_id'];
        $contract -> save();
    }
    
    public static function update($post)
    {
        $user_id = $post['employee_id']; 
        if($user_id > 0)
        {
            $user = Db_User::get($user_id);
            if(isset($post['manager']) && $post['manager'] == 1)
            {
                if(!$user->has('roles', ORM::factory('role', array('name' => 'manager'))))
                {
                    $user -> add('roles', ORM::factory('role', array('name' => 'manager')));
                }
            }
            else
            {
                $user->remove('roles', ORM::factory('role', array('name' => 'manager')));
            }
            if(isset($post['administrator']) && $post['administrator'] == 1)
            {
                if(!$user->has('roles', ORM::factory('role', array('name' => 'admin'))))
                {
                    $user -> add('roles', ORM::factory('role', array('name' => 'admin')));
                }
            }
            else
            {
                $user->remove('roles', ORM::factory('role', array('name' => 'admin')));
            }
            DB::update('users_additionals')->set(array(
                'name' => $post['name'],
                'surname' => $post['surname'],
                ))
            -> where('id','=',(int)$user_id)
            -> execute();
            if(Protection::isUsernameUnique($user_id, $post['username'], $post['email']))
            {
                DB::update('users')->set(array(
                    'username' => $post['username'],
                    'email' => $post['email'],
                    ))
                -> where('id','=',(int)$user_id)
                -> execute();
            }
            if($post['password'] != '' && $post['repeat_password'] && $post['password'] == $post['repeat_password'])
            {
                Db_User::updateUserPassword($user_id, $post['password']);
            }
            DB::update('contracts')->set(array(
                'from' => $post['from'],
                'to' => $post['to'],
                'worktime_part' => $post['contract_type'],
                'manager_id' => $post['manager_id'],
                ))
            -> where('user_id','=',(int)$user_id)
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
    
    public static function get($id)
    {
        return ORM::factory('user')
            -> join('users_additionals', 'LEFT')
            -> on('users_additionals.id', '=', 'user.id')
            -> join('contracts', 'LEFT')
            -> on('contracts.user_id', '=', 'user.id')
            -> select('*')
            -> where('user.id', '=', $id)
            -> find();
    }
    
    public static function delete($user_id)
    {
        DB::delete('users_additionals')
            -> where('id', '=', $user_id)
            -> execute();
        
        DB::delete('contracts')
            -> where('user_id', '=', $user_id)
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
        DB::update('contracts')->set(array(
                'manager_id' => 0,
                ))
            -> where('manager_id','=',(int)$user_id)
            -> execute();
    }
    
    public static function getUserManagers($user_id, $role)
    {
        $return = array(
            '0' => __('Select'),
        );
        $users = ORM::factory('user')
        ->join('roles_users', 'LEFT')
        ->on('roles_users.user_id', '=', 'id')
        ->join('roles', 'LEFT')
        ->on('roles_users.role_id', '=', 'roles.id')
        ->join('users_additionals', 'LEFT')
        ->on('users_additionals.id', '=', 'user_id')
        ->select('*')
        ->where('roles.name', '=', $role)
        ->where('user_id', '!=', $user_id)
        ->find_all();
        foreach($users as $u)
        {
            $return[$u -> user_id] = $u -> name.' '.$u -> surname;
        }
        return $return;
    }
}
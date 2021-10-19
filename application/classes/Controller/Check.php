<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Check extends Controller_Template
{
    public $template = 'templates/message';
    
    public function action_getModels()
    {
        if($post = $this -> request -> post())
        {            
            $id = json_decode($post['id']);
            
            $this -> template -> message = Db_Brand_Model::getModelsSelectString($id);	
        }
    }
    
    public function action_getVersions()
    {
        if($post = $this -> request -> post())
        {            
            $brand_id = json_decode($post['brand_id']);
            $model_id = json_decode($post['model_id']);
            
            $this -> template -> message = Db_Brand_Model_Version::getVersionsSelectString($brand_id, $model_id);
                    
        }
    }
    
    public function action_checkUniqueUsername()
    {
        if($post = $this -> request -> post())
        {
            $username = json_decode($post['json_string']);

            $user = ORM::factory('user');
            $result = $user
                ->select('*')
                ->where('username', '=', $username->name)
                ->where('id', '!=', $username->id)
                ->find()->as_array();

            if(isset($result['id']))
            {
                $this -> template -> message = "true";
            }
            else
            {
                $this -> template -> message = "false";
            }	
        }
    }
    
    public function action_checkUniqueEmail()
    {
        if($post = $this->request->post())
        {
            $username = json_decode($post['json_string']);

            $user = ORM::factory('user');
            $result = $user
                ->select('*')
                ->where('email', '=', $username->email)
                ->where('id', '!=', $username->id)
                ->find()->as_array();

            if(isset($result['id']))
            {
                $this->template->message = "true";
            }
            else
            {
                $this->template->message = "false";
            }	
        }
    }  
    
    public static function action_changePassword()
    {
        if($post = $this->request->post())
        {
            $data = json_decode($post['json_string']);
            $password = $data -> password;
            
            $user = Auth::instance()->get_user();
            $user_id = $user -> id();
            Db_User::updateUserPassword($user_id, $password);

            $this->template->message = "true";	
        }
    }
    
    public function action_getNewContent()
    {
        $return = '';
                        
        $return .= '<div class="row-form row-form-content"><div class="span3">';
        $return .= __('Word / sentence (en)').'*:<br>';
        $return .= __('Translation (pl)').'*:'; 
        $return .= '</div><div class="span9">';
        $return .= Form::input('word[]', null, array('class' => 'required word')).'<br>';
        $return .= Form::input('translation[]', null, array('class' => 'required translation')).'<br>';
        $return .= Form::button(NULL, __('Delete'), array('class'=>'cancel btn btn-danger', 'tabindex' => '-1'));
        $return .= '</div><div class="clear"></div></div>';        
            
        $this -> template -> message = $return;
    }    
    
    public function action_treechange()
    {
        if($post = $this->request->post())
        {
            $array = array();

            $list = $post['list'];

            $member = ORM::factory('Categorie');
            $result = $member
                -> select('category_id')
                -> find_all()
                -> as_array();

            foreach($result as $item)
            {	
                if(in_array($item -> category_id , array_keys($list)))
                {
                    $query = DB::update('categories')
                    -> set(array(
                        'parent_id' => (int)$list[$item -> category_id], 
                        'position' => (int)array_search($item -> category_id, array_keys($list))))
                    -> where('category_id','=',(int)$item -> category_id)
                    -> execute();
                }   
            }

            $this -> template -> message = true;
        }
    }    
}

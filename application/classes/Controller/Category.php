<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Category extends Controller_Home 
{	
    public $current_controller = 'category';
    
    public function action_new()
    {
        $id = $this->request->param('id');

        $this->template->content = View::factory('templates/'.$this -> current_controller.'/category_new_form');

        $this -> template -> content -> tree = Db_Category::print_menu_parent(0, $id, 0, array(), 1);

        $parent_id = 0;
        
        if(isset($id))
        {
            $this->template->content->item = Db_Category::get($id);
            $this -> template -> menu -> active = $id;
            $this -> template -> header -> parents = Db_Category::getParents($id);
        }
        
        if(isset($_GET))
        {
            if(isset($_GET['parent_id']))
            {
                $parent_id = $_GET['parent_id'];
                $this -> template -> menu -> active = $parent_id;
                $this -> template -> header -> parents = Db_Category::getParents($parent_id);
                $this -> template -> content -> parent_id = $parent_id;
            }
        }
        
        if(Auth::instance()->logged_in())
        {
            $admin = false;
            $haveprivate = false;
            
            $u = Auth::instance()->get_user();
            if($u->has('roles', ORM::factory('Role', array('name' => 'admin'))))
            {
                $admin = true;
            }
            $user_id = $u -> id;
            if(Db_User::havePermission($user_id, 'haveprivate'))
            {
                $haveprivate = true;
            }
            
            $this -> template -> content -> admin = $admin;
            $this -> template -> content -> haveprivate = $haveprivate;
            $this -> template -> content -> user_id = $user_id;
        }

        if($post = $this->request->post())
        {
            if($post['category_id'] == 0)
            {
                $category_id = Db_Category::add($post);
            }
            else
            {
                Db_Category::update($post);
                $category_id = $post['category_id'];
            }
            $private = isset($post['private']) ? $post['private'] : 0;
            Db_Category::updatePrivate($user_id, $category_id, $private);
            header('Location: '.Kohana::$config->load('globals.base_url').'category/index/'.$category_id);
            exit;
        }
    }
    
    public function action_generateTest()
    {
        $category_id = 0;
        if(isset($_GET))
        {
            if(isset($_GET['category_id']))
            {
                $category_id = $_GET['category_id'];
            }
        }

        $this->template->content = View::factory('templates/'.$this -> current_controller.'/generateTest');
        $this -> template -> content -> numberStudents = Infrastructure::getRangeSelect(1,30);
        $this -> template -> content -> numberWords = Infrastructure::getRangeSelect(1,50);
        $this -> template -> content -> tree = Db_Category::print_menu_parent(0, 0, 0, array(), 0, true);
        
        if(isset($category_id))
        {
            $this -> template -> content -> category_id = $category_id;
            $this -> template -> menu -> active = $category_id;
            $this -> template -> header -> parents = Db_Category::getParents($category_id);
        }
        
        if($post = $this->request->post())
        {
            ob_start();
            require Kohana::find_file('vendor','tcpdf/config/tcpdf_config');
            require Kohana::find_file('vendor','tcpdf/tcpdf');
        
            $name = $post['name'];
            $count_students = (int)$post['students'];
            $description = $post['description'];
            $category_id = $post['category_id'];
            $words_content = $post['words'];
            $space = isset($post['space']) && $post['space'] == 1 ? 1 : 0;
            $test_length = 0;
            foreach($words_content as $key => $value)
            {
                $test_length += $value;
            }
            $html = '';
            $html_key = '';
            
            if($count_students > 0)
            {
                $html .= '<style></style>';
                $html .= '<table cellpadding="10">';
                $html_key .= '<table><tr><td style="font-weight: bold; font-size: 15px; text-align: center;">'.$name.' - KLUCZ</td></tr></table><table cellpadding="10">';
                for($i = 0; $i < $count_students; $i++)
                {
                    //poczatek
                    $test_number = $i + 1;
                    if($i%2 == 0)
                    {
                        $html_key .= '<tr nobr="true">';
                    }
                    if($i%2 == 0)
                    {
                        $html_key .= '<td style="border-right: 1px dashed #000; border-top: 1px dashed #000;">';
                    }
                    else
                    {
                        $html_key .= '<td style="border-top: 1px dashed #000;">';
                    }
                    
                    $html .= '<tr nobr="true">';
                    $html .= '<td style="border-top: 1px dashed #000; ">';
                    
                    //zawartosc kartkówki
                    
                    //koniec zawartości
                    $test = Db_Test::getTest($test_number, $name, $words_content, $space);
                    $html .= $test['test'];
                    $html .= '</td>';
                    $html .= '</tr>';
                    
                    //$html_key .= '<tr>';
                    //$html_key .= '<td style="border-top: 1px dashed #000;">';
                    
                    //zawartosc kartkówki
                    
                    //koniec zawartości
                    
                    $html_key .= $test['key'];
                    $html_key .= '</td>';
                    //$html_key .= '</tr>';
                    
                    if($i%2 == 1)
                    {
                        $html_key .= '</tr>';
                    }
                    if($i == ($count_students - 1) && $i%2==0)
                    {
                        $html_key .= '</tr>';
                    }
                }
                $html .= '</table>';
                $html_key .= '</table>';
                
                $file_name = Time::getNow();
                Db_Test::add($name, $file_name, $count_students, $test_length, $description);
                
                $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
                // set document information
                $pdf->SetCreator(PDF_CREATOR);
                // set header and footer fonts
                $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
                $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
                
                $pdf->SetPrintHeader(false);
                $pdf->SetPrintFooter(false);
                // set default monospaced font
                $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
                // set margins
                $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
                // set auto page breaks
                $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
                // set image scale factor
                $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
                // ---------------------------------------------------------
                // set font
                $pdf->SetFont('dejavusans', '', 10);
                // add a page
                $pdf->AddPage();
                // writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
                // writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
                // create some HTML content
                // output the HTML content
                $pdf->writeHTML($html, true, false, true, false, '');
                
                // reset pointer to the last page
                $pdf->lastPage();
                ob_end_clean();
                // ---------------------------------------------------------

                //Close and output PDF document
                $pdf->Output('files/'.$file_name.'.pdf', 'F');
                $this->request->headers(array(
                    'Content-Type' => 'application/pdf',
                    'Cache-Control' => 'public, must-revalidate, max-age=0',
                    'Pragma' => 'public',
                    'Content-Transfer-Encoding' => 'binary',
                    )
                );
                
                //key
                $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
                // set document information
                $pdf->SetCreator(PDF_CREATOR);
                // set header and footer fonts
                $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
                $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
                // set default monospaced font
                $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
                // set margins
                $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
                // set auto page breaks
                $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
                // set image scale factor
                $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
                // ---------------------------------------------------------
                // set font
                $pdf->SetFont('dejavusans', '', 10);
                // add a page
                $pdf->AddPage();
                // writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
                // writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
                // create some HTML content
                // output the HTML content
                $pdf->writeHTML($html_key, true, false, true, false, '');
                // reset pointer to the last page
                $pdf->lastPage();
                ob_end_clean();
                // ---------------------------------------------------------

                //Close and output PDF document
                $pdf->Output('files/'.$file_name.'_key.pdf', 'F');
                $this->request->headers(array(
                    'Content-Type' => 'application/pdf',
                    'Cache-Control' => 'public, must-revalidate, max-age=0',
                    'Pragma' => 'public',
                    'Content-Transfer-Encoding' => 'binary',
                    )
                );
                
                
            }
            header('Location: '.Kohana::$config->load('globals.base_url').'tests');
            exit;
        }
    }
        
    public function action_index()
    {
        $admin = false;
        $reading = false;
        $editing = false;
        $deleting = false;
        $adding = false;
        if(!Auth::instance()->logged_in())
        {
                header('Location: '.Kohana::$config->load('globals.base_url').'login');
                exit;
        }	
        else
        {
            $u = Auth::instance()->get_user();
            if($u->has('roles', ORM::factory('Role', array('name' => 'admin'))))
            {
                $admin = true;
            }
            $user_id = $u -> id;
            if(Db_User::havePermission($user_id, 'reading'))
            {
                $reading = true;
            }
            if(Db_User::havePermission($user_id, 'adding'))
            {
                $adding = true;
            }
            if(Db_User::havePermission($user_id, 'editing'))
            {
                $editing = true;
            }
            if(Db_User::havePermission($user_id, 'deleting'))
            {
                $deleting = true;
            }
            
            $lang = isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : 'pl-pl';
            
            $scripts_indexTable = array(
                    //'media/js/indexTable/scripts.js',
            );
            if($lang == 'pl-pl')
            {
                $scripts_indexTable[] = 'media/js/scripts-table-pl.js';
            }
            else
            {
                $scripts_indexTable[] = 'media/js/scripts-table-en.js';
            }

            $id = $this -> request -> param('id');
            $this -> template -> content = View::factory('templates/category/indexTable');
            $this -> template -> content -> id = $id;
            $this -> template -> content -> table = Db_Content::getCategoryContent($id);
            $this -> template -> content -> scripts = $scripts_indexTable;
            $this -> template -> indexUrl = Kohana::$config->load('globals.base_url')."category/index/".$id;
            $this -> template -> menu -> active = $id;
            $this -> template -> header -> parents = Db_Category::getParents($id);
            
            $this -> template -> content -> admin = $admin;
            $this -> template -> content -> deleting = $deleting;
            $this -> template -> content -> user_id = $user_id;
        }
        
    }
	
    public function action_delete()
    {
        $id = $this->request->param('id');
        $this->template->content = View::factory('templates/category/category_delete_confirm');
        $this->template->content->id = $id;
        $this -> template -> menu -> active = $id;
        $this -> template -> header -> parents = Db_Category::getParents($id);
        
        if($post = $this->request->post())
        {
            $category_id = $post['category_id'];
            $category = Db_Category::get($category_id);
            $parent_id = $category -> parent_id;
            if($category_id != 0)
            {
                Db_Category::delete($category_id);
            }
            header('Location: '.Kohana::$config->load('globals.base_url')."category/index/".$parent_id);
            exit;
        }
    }	
}

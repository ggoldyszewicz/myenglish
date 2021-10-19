<?php defined('SYSPATH') OR die('No direct access allowed.');

class Db_Test
{
    public static function getAll()
    {        
        return ORM::factory('Test')
            ->where('deleted', '=', 0)
            ->order_by('id', 'DESC')
            ->find_all();
    } 
    
    public static function add($name,$file,$students,$words,$description)
    {
        $categorie = ORM::factory('Test');
        $categorie->name = $name;
        $categorie->file = $file;
        $categorie->students = $students;
        $categorie->words = $words;
        $categorie->description = $description;
        $categorie->created_by = Auth::instance()->get_user()->id;
        $categorie->save();
    }
    
    public static function delete($test_id)
    {
        DB::update('tests')
            ->set(array(
                'deleted'=>1,
            ))
            ->where('id','=',(int)$test_id)
            ->execute();
    }
    
    public static function get($test_id)
    {
        return ORM::factory('Test')
            ->where('id', '=', $test_id)
            ->find();
    }
    
    public static function update($post)
    {
        DB::update('tests')
            ->set(array(
                'name'=>$post['name'],
                'description'=>$post['description']
            ))->where('id','=',(int)$post['test_id'])
            ->execute();
    }
    
    public static function getEmptyArray($lenght)
    {
        $return = array();
        if($lenght > 0)
        {
            for($i = 0; $i<$lenght; $i++)
            {
                $return[] = 0;
            }
        }
        return $return;
    }
    
    public static function getTest($test_number, $test_name, $words_content, $space)
    {
        $return = array();
        
        $ret = '';
        $ret .= '<table>';
        $ret .= '<tr><td><b>'.$test_name.'</b></td></tr>';
        $ret .= '<tr>';
            $ret .= '<td style="border-bottom: 1px solid #000;">';
                $ret .= '<table><tr><td style="width: 60%;">Imię i nazwisko:</td><td style="width: 20%;">Klasa:</td><td style="text-align: right; width: 20%;">Id: <b>#'.$test_number.'</b></td></tr></table>';
            $ret .= '</td>';
        $ret .= '</tr>';
        
        $ret_key = '';
        $ret_key .= '<table>';
        $ret_key .= '<tr><td><b>'.$test_name.' - KLUCZ</b></td></tr>';
        $ret_key .= '<tr>';
            $ret_key .= '<td style="border-bottom: 1px solid #000;">';
                $ret_key .= '<table><tr><td style="text-align: right;">Id: <b>#'.$test_number.'</b></td></tr></table>';
            $ret_key .= '</td>';
        $ret_key .= '</tr>';
        
        $part = Db_Test::getTestPart($words_content, $space);
        $ret .= $part['test'];
        $ret_key .= $part['key'];
                
        $ret .= '</table>';
        $ret_key .= '</table>';
        $return['test'] = $ret;
        $return['key'] = $ret_key;
        return $return;
    }
    
    public static function getTestPart($words_content, $space)
    {     
        $testPart = '';
        $testPart_key = '';
        $number = 0;
        
        foreach($words_content as $category_id => $test_length)
        {
            if($category_id > 0 && $test_length > 0)
            {
                
                $w = ORM::factory('Word')
                    ->where('category_id', '=', $category_id)
                    ->where('deleted', '=', 0)
                    ->order_by(DB::expr('RAND()'))
                    ->find_all();
                $words = array();
                foreach($w as $word)
                {
                    $words['test'][] = $word -> translation;
                    $words['key'][] = $word -> word;
                }

                if(count($words['test']) < $test_length)
                {
                    $test_length = count($words['test']);
                }
                $return = array();
                

                $count_words = count($words['test']) - 1;     
                echo $count_words.' ';
                $ile = 0;

                $temp = Db_Test::getEmptyArray($count_words + 1);
                var_dump($temp);
                while($ile < $test_length)
                {
                    $random = Db_Test::getRandom(0, $count_words);
                    if($temp[$random] == 0)
                    {
                        $number++;
                        $testPart .= '<tr><td style="border-bottom: 1px dashed #000;">';
                        if($space == 1)
                        {
                            $testPart .= $number.'. '.$words['test'][$random].str_repeat(' &nbsp; ',strlen($words['test'][$random]));
                        }
                        else
                        {
                            $testPart .= $number.'. '.$words['test'][$random];
                        }
                        $testPart .= '</td></tr>';

                        $testPart_key .= '<tr><td style="border-bottom: 1px dashed #000;">';

                        $testPart_key .= $number.'. '.$words['key'][$random];
                        $testPart_key .= '</td></tr>';

                        $temp[$random] = 1;
                        $ile++;
                    }
                }
            }
        }
        
        $return['test'] = $testPart;
        $return['key'] = $testPart_key;
        return $return;
    }
    
    public static function getRandom($from, $to)
    {
        $return = null;
        if($from <= $to)
        {
            $return = rand($from, $to);
        }
        else
        {
            $return = rand($to, $from);
        }
        return $return;
    }
    
    
}
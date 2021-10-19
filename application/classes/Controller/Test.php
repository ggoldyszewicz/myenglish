<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller_Template 
{
    public $current_controller = 'tests';
    public $template = 'templates/message';
    public function action_index()
    {
        /*
        $categories[] = 2;
        $test_length = 100;
        $words = array();
        $w = ORM::factory('Word')
            ->where('category_id', 'IN', $categories)
            ->where('deleted', '=', 0)
            ->order_by(DB::expr('RAND()'))
            ->find_all();
        foreach($w as $word)
        {
            $words[] = $word -> word;
        }
        
        echo count($words);

        if(count($words) < $test_length)
        {
            $test_length = count($words);
        }
        echo $test_length;
        $html = Db_Test::getTest($words, $test_length);
        var_dump($html);
         * 
         */
        /*
        mail(
            '+48509618309@text.plusgsm.pl',
            '',
            'Oto moja wiadomosc!',
            "From: Kamil <xxx@kamilbrenk.pl>\r\n"
        );
         * 
         */
        $m = 'a';
        $b = 'hh';
        $con = 'a a d';
        $con = str_replace($m, $b, $con);
        echo $con;
    }
}

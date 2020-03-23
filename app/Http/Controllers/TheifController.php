<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yangqi\Htmldom\Htmldom;
use App\articles;

class TheifController extends Controller
{
    public $target = 'https://freefrontend.com';
    
    public function index()
    {
        $data['art_list'] = $this->loadHtml(1);
        $data['current_page'] = 1;
        return view('backend.theif.index')->with('data',$data);;
    }
    
    public function changePage($page)
    {
        $data['art_list'] = $this->loadHtml($page);
        $data['current_page'] = $page;
        return view('backend.theif.index')->with('data',$data);;
    }

    public function loadHtml($page)
    {
        if($page > 1){
            $html = new Htmldom($this->target.'//page//'.$page);
        }else{
            $html = new Htmldom($this->target);
        }
        $rs = $html->find('article.clear-after');
        $data = [];
        $art_list = [];
        foreach($rs as $key => $value){
            if(sizeof($value->find('.external-link')) <= 0 ){
                $model['art_name'] = $value->find('.permalink',0)->plaintext;
                $model['art_avt'] = $this->target.$value->find('img',0)->src;
                $model['art_detail'] = str_replace('                           ...',
                    '',$value->find('column>p',0)->plaintext);
                $model['art_link'] = $value->find('.permalink',0)->href;
                $model['art_date'] = date("d/m/Y", strtotime($value->find('time',0)->plaintext));
                array_push($art_list,$model);
            }
        }
        return $art_list;
    }
}

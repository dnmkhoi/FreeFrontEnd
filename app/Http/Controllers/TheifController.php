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
                $model['art_link'] = str_replace($this->target.'/','',$value->find('.permalink',0)->href);
                $model['art_date'] = date("d/m/Y", strtotime($value->find('time',0)->plaintext));
                array_push($art_list,$model);
            }
        }
        return $art_list;
    }

    public function detail($key) {
        $html = new Htmldom($this->target.'//'.$key);
        $rs = $html->find('article.wrapper-2017');
        $data = [];
        $art_list = [];
        foreach($rs as $key => $value){
            $model['art_name'] = $value->find('h3',0)->plaintext;
            $model['art_detail'] = $value->find('p',0)->plaintext;
            $model['art_isimg'] = sizeof($value->find('img')) > 0;
            if(sizeof($value->find('video')) <= 0){
                if(empty($value->find('img',0)->getAttribute('data-src'))){
                    $model['art_src'] = $this->target.$value->find('img',0)->getAttribute('src');
                }else{
                    $model['art_src'] = $this->target.$value->find('img',0)->getAttribute('data-src');
                }
            }else{
                $model['art_src'] = $this->target.$value->find('video',0)->src;
            }
            $model['art_isimg'] = sizeof($value->find('img')) > 0;
            $model['art_author'] = $value->find('.info-author li',0)->plaintext;
            if(!empty($value->find('.info-author li',1)->plaintext)){
                $model['art_date'] = '('.date("d/m/Y", strtotime($value->find('.info-author li',1)->plaintext)).')';
            }else{
                $model['art_date'] = '';
            }
            $model['links'] = [];
            foreach($value->find('.info-link a') as $key_link => $value_link){
                $link['name'] = $value_link->plaintext;
                $link['link'] = $value_link->href;
                array_push($model['links'],$link);
            }

            array_push($art_list,$model);
        }
        $data['art_list'] = $art_list;
        return view('backend.theif.detail')->with('data',$data);;
    }
}

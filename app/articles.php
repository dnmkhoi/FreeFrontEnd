<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    const     CREATED_AT    = 'created_at';
    protected $table        = 'articles';
    protected $fillable     = ['art_name', 'art_author', 'art_description', 'art_bowsers',
    'art_reponsive', 'art_makewith', 'art_link_demo', 'art_link_download','art_dependencies',
    'avt_id', 'cat_id'];
    protected $guarded      = ['art_id'];
    protected $primaryKey   = 'art_id';
    protected $dates        = ['created_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function avatars(){
        return $this->hasMany('App\avatars', 'avt_id', 'avt_id');
    }
    public function categories(){
        return $this->hasMany('App\categories', 'cat_id', 'cat_id');
    }
}

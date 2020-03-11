<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article_category extends Model
{
    public    $timestamps   = false;
    protected $table        = 'article_category';
    protected $guarded      = ['art_cat_id','art_id','cat_id'];
    protected $primaryKey   = 'art_cat_id';
}

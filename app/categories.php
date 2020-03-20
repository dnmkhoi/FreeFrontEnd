<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table        = 'categories';
    protected $fillable     = ['cat_name'];
    protected $guarded      = ['cat_id'];
    protected $primaryKey   = 'cat_id';
    protected $dateFormat   = 'Y-m-d H:i:s';
    public $timestamps = false;

    public function articles()
    {
        return $this->hasMany('App\articles', 'cat_id', 'cat_id');
    }
}

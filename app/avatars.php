<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avatars extends Model
{
    protected $table        = 'avatars';
    protected $fillable     = ['avt_title','avt_type','avt_src'];
    protected $guarded      = 'avt_id';
    protected $primaryKey   = 'avt_id';
    protected $dateFormat   = 'Y-m-d H:i:s';
    public $timestamps = false;

    public function articles()
    {
        return $this->hasMany('App\articles', 'avt_id', 'avt_id');
    }
}

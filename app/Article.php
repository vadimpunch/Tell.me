<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{

    use SoftDeletes;
// protected $table = 'articles';
 public $incrementing = false ;
 public $timestamps = true;
protected $fillable = ['name', 'text'];
protected $guarded = [];
protected $dates = ['deleted_at'];

}

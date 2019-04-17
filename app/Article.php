<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{

    use SoftDeletes;
// protected $table = 'articles';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = ['name', 'text'];
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    protected $casts = [
        'name' => 'boolean',
        'text' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getNameAttribute($value)
    {
        return 'hello world  ' . $value;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = '|' . $value . '|';
    }
}

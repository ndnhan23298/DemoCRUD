<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'cate_id',
    ];

    // public function cateComic(){
    //     return $this->belongsTo('App\Cate', 'cate_id', 'id');
    // }
}

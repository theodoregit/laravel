<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'price',  'amount', 'desc1', 'desc2', 'desc3', 'image',
    ];

    public function getImageAttribute($image){
        return asset($image);
    }
}

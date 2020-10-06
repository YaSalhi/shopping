<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    /** 
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'tax'
    ];

    public $timestimps = false ; 

    

}

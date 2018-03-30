<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = 'messages';
    
    public $fillable = ['name','email','phone','message','status'];
}

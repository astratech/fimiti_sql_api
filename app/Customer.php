<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
	protected $table = 'users';

    protected $guarded = [];

    protected $primaryKey = 'id';
    
    public $incrementing = true;

}
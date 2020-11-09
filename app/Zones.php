<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model{
	protected $table = 'zones';

    protected $guarded = [];

    protected $primaryKey = 'id';
    
    public $incrementing = true;

}

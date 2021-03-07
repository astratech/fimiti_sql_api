<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DispatchOrders extends Model{
	protected $table = 'dispatch_orders';

    protected $guarded = [];

    protected $primaryKey = 'id';
    
    public $incrementing = true;


    

}
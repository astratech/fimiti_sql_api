<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model{

    protected $table = 'wallet_history';

    protected $guarded = [];
    
    protected $primaryKey = 'id';
    
    public $incrementing = true;
    
}

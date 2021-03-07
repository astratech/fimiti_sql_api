<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable{
	protected $table = 'managers';

    protected $guarded = [];

}

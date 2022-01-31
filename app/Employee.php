<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];
    protected $table = 'employee';
	public $timestamps = true;
	protected $fillable = [
		'name', 'email','designation', 'photo', 'updated_at', 'created_at'
	];
    
}
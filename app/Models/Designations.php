<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designations extends Model
{
    protected $guarded = [];
    protected $table = 'designations';
	protected $fillable = [
		'd_id', 'd_name', 'created_at'
	];
    
}
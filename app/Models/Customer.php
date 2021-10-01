<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table='customers';
    protected $fillable = ['name', 'coming_from', 'address','phone','email'];
    public $timestamps=false;
    use HasFactory;
}

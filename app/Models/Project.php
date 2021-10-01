<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table='projects';
    protected $fillable = ['name', 'details', 'cost','start_date','end_date','status'];
    public $timestamps=false;


}

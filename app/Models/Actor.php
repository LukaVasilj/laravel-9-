<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $table = "actor";
    protected $primaryKey = 'actor_id';
    protected $fillable = ["first_name","last_name"];


    public $timestamps = false;

}

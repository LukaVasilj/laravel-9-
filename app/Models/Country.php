<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Country extends Model
{
    use HasFactory;

    protected $table = "country";
    protected $primaryKey = 'country_id';
    protected $fillable = ["country"];


    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany(City::class,'country_id','city_id');
    }

}

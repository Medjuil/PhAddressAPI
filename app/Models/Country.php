<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
     // disabling timestamp property
     public $timestamps = false;

     protected $fillable = [
         'name',
         'code_name',
     ];
 
     public function regions()
     {
         $this->hasMany(Region::class);
     }
 
     public function provinces()
     {
         $this->hasMany(Province::class);
     }
 
     public function municipalities()
     {
         $this->hasMany(Municipality::class);
     }
 
     public function barangays()
     {
         $this->hasMany(Barangay::class);
     }
}

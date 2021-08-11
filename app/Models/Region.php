<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    // disabling timestamp property
    public $timestamps = false;

    protected $fillable = [
        'name',
        'country_code',
    ];

    public function country()
    {
        $this->belongsTo(Country::class);
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

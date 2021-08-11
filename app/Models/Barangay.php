<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;
    // disabling timestamp property
    public $timestamps = false;

    protected $fillable = [
        'name',
        'country_code',
        'region_code',
        'province_code',
        'municipality_code',
    ];

    public function country()
    {
        $this->belongsTo(Country::class);
    }

    public function region()
    {
        $this->belongsTo(Region::class);
    }

    public function province()
    {
        $this->belongsTo(Province::class);
    }

    public function municipality()
    {
        $this->belongsTo(Municipality::class);
    }
}

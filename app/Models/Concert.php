<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'start_datetime', 'end_datetime', 'max_people', 'tickets_sold'
    ];

    public function bands()
    {
        return $this->belongsToMany(Band::class, 'band_concert');
    }
}


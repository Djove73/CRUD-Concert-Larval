<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'music_type', 'members_count'];

    public function concerts()
    {
        return $this->belongsToMany(Concert::class, 'band_concert');
    }
}


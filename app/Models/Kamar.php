<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kamar extends Model
{
    protected $fillable = [
        'nomor_kamar',
        'gedung',
    ];

    public function penghunis(): HasMany
    {
        return $this->hasMany(Penghuni::class);
    }
}
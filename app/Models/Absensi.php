<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absensi extends Model
{
    protected $fillable = [
        'penghuni_id',
        'tanggal',
        'jam_keluar',
        'jam_masuk',
        'status',
    ];

    public function penghuni(): BelongsTo
    {
        return $this->belongsTo(Penghuni::class);
    }
}
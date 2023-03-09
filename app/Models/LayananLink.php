<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananLink extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the layanan that owns the LayananLink
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }
}

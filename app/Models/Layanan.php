<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanans';
    protected $guarded = [];

    /**
     * Get all of the link for the Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function link()
    {
        return $this->hasMany(LayananLink::class, 'layanan_id', 'id');
    }
}

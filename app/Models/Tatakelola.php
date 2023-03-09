<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tatakelola extends Model
{
    use HasFactory;

    protected $table = "tatakelolas";

    protected $fillable = ['nama', 'file'];
}

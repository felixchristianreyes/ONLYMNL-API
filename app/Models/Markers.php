<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Markers extends Model
{
    use HasFactory;
    protected $table = 'markers';
    protected $fillable = [
        'name',
        'lat',
        'lng',
    ];
}

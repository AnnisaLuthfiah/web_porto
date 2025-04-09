<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    // Kolom-kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}

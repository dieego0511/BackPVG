<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citas extends Model
{
    use HasFactory;

    protected $table = 'citas';

    protected $fillable = [
        'pac_id',
        'observations'
    ];
}


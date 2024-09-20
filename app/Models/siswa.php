<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fileable = [
        'name',
        'age',
        'nis',
        'grade',
        'gender',
    ];
}
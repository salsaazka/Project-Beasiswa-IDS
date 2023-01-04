<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipApp extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nis',
        'region',
        'ps',
        'image'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WoOnly extends Model
{
    use HasFactory;
    protected $table = 'woonly';
    protected $guarded = [];
}

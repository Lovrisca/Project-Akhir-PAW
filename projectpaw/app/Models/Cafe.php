<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    protected $table = 'cafes';
    protected $primaryKey = 'id_cafe';
    public $timestamps = false;
    protected $guarded = [];
    public $incrementing = false;
}

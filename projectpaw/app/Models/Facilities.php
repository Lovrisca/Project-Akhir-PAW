<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    protected $table = 'facilities';
    protected $primaryKey = 'id_fasilitas';
    public $timestamps = false;
    protected $guarded = [];
    public $incrementing = false;
}

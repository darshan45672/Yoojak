<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacedStudent extends Model
{
    use HasFactory;

    protected $fillable = ['name','usn','company','branch','package','image','status'] ;
}

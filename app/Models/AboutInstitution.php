<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutInstitution extends Model
{
    use HasFactory;

    protected $fillable = ['content','title','image'];
}

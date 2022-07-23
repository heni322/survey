<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourceType extends Model
{
    protected $fillable = ['source_info'];
    use HasFactory;
}

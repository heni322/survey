<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['email','age','sexe'];
    public function surveyalls(){
        return $this->belongsTo(SurveyAll::class);
    }
    use HasFactory;
}

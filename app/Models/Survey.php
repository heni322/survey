<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['question','id_answer'];
    public function answers(){
        return $this->hasMany(Answer::class, 'id_answer');
    }
    public function surveyalls(){
        return $this->belongsTo(SurveyAll::class);
    }
    use HasFactory;
}

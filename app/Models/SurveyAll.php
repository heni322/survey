<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyAll extends Model
{
    protected $fillable = ['title','purpose','date_push'];
    public function customers(){
        return $this->hasMany(Customer::class, 'id_customer');
    }
    public function surveys(){
        return $this->hasMany(Survey::class, 'survey_id');
    }
    use HasFactory;
}

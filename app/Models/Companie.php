<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    protected $fillable = ['name','customer','nb_Client'];
    public function services(){
        return $this->hasMany(Service::class, 'company_id');
    }
    use HasFactory;
}

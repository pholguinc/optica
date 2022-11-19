<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;



    //Relación uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class, 'patient_id');
    }

}

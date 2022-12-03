<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;


    protected $guarded = ['updated_at'];

    protected $dates = ['control'];

    //Relación uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class, 'patient_id');
    }

}

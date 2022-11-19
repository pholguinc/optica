<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Node\Stmt\Return_;

class User extends Authenticatable
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'users';

    protected $fillable = ['name','email','two_factor_secret','two_factor_recovery_codes','two_factor_confirmed_at','status','current_team_id','profile_photo_path'];


    //Relación uno a muchos

    public function queries(){
        return $this->hasMany(Query::class);
    }


}

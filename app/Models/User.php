<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Node\Stmt\Return_;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
	use HasFactory;
    use HasRoles;

    public $timestamps = true;

    protected $table = 'users';

    protected $guarded = ['id','created_at','updated_at'];


    //Relación uno a muchos

    public function queries(){
        return $this->hasMany(Query::class);
    }

    public function getRoleNames()
    {
        return $this->belongsToMany(Role::class);

    }




}

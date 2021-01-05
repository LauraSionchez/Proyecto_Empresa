<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";
  
	protected $fillable = ['ci','first_name_1','first_name_2','last_name_1','last_name_2','sexo','fech_nac','fech_ingre','phone', 'email'];

	protected $connection = "mysql";

    var $timestamps = false;

    public function family()
    {
        return $this->hasMany('App\Models\Family');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $table = "families";
  
	protected $fillable = ['ci','first_name_1','first_name_2','last_name_1','last_name_2','sexo','fech_nac','parent'];

	protected $connection = "mysql";

    var $timestamps = false;

    public function employee()
    {
        return $this->belongsTo('App\Model\Employee');
    }
}

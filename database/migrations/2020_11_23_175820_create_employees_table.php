<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->string('ci',10)->unique();
            $table->string('first_name_1', 40);
            $table->string('first_name_2',40);
            $table->string('last_name_1',40);
            $table->string('last_name_2',40);
            $table->string('sexo',1);
            $table->string('fech_nac');
            $table->string('fech_ingre');
            $table->string('phone',15);
            $table->string('email')->unique();

            // $table->increments('family_id')->unsigned();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

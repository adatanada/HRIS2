<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_master', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->integer('contact');
            $table->longText('address');
            $table->date('birthday');
            $table->string('gender');
            $table->string('designation');
            $table->double('salary');
            $table->double('tax');
            $table->longText('file_path')->nullable();
            $table->bigInteger('sssid')->unsigned()->index();  
            // $table->foreign('sssid')->references('id');
            $table->bigInteger('pagibigid')->unsigned()->index();  
            // $table->foreign('pagibigid')->references('id');
            $table->bigInteger('philhealthid')->unsigned()->index();  
            // $table->foreign('philhealthid')->references('id'); 
            $table->bigInteger('departmentid')->unsigned()->index();  
            // $table->foreign('departmentid')->references('id');  
            $table->softDeletes();			
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
        Schema::dropIfExists('employee_master');
    }
}

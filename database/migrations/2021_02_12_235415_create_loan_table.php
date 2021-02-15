<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employeeid')->unsigned()->index();  
            $table->foreign('employeeid')->references('id')->on('employee_master');            
            $table->bigInteger('loantypeid')->unsigned()->index();  
            $table->foreign('loantypeid')->references('id')->on('loantype');
            $table->double('loanamount');
            $table->integer('month');
            $table->string('notes');
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
        Schema::dropIfExists('loan');
    }
}

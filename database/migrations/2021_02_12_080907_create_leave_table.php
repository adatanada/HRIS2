<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('leave', function (Blueprint $table) {
                $table->id();
                $table->integer('employee_id');
                $table->string('leave_type');
                $table->date('start');
                $table->date('end');
                $table->string('status');
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
        Schema::dropIfExists('leave');
    }
}

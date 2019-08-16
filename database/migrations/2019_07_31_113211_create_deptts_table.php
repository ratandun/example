<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deptts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('hod');
            $table->string('address')->nullable();;
            $table->string('telephone')->nullable();;
            $table->string('email')->nullable();;
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
        Schema::dropIfExists('deptts');
    }
}

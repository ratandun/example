<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('deptt_id');
            $table->string('office_name');
            $table->string('hod');
            $table->string('address')->nullable();;
            $table->string('email')->nullable();;
            $table->string('telephone')->nullable();;
            $table->integer('distt_id');
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
        Schema::dropIfExists('office_masters');
    }
}

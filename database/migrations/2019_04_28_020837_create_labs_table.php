<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            
            $table->bigInteger('pt_id');
            $table->double('a1c', 5, 2)->nullable();
            $table->double('glucose', 5, 2)->nullable();
            $table->double('hdl', 5, 2)->nullable();
            $table->double('ldl', 5, 2)->nullable();
            $table->double('triglicerides', 5, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labs');
    }
}

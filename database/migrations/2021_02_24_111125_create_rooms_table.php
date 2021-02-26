<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if(Schema::hasTable('rooms')) return;
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->float('price', 5, 2);
            $table->integer('amount');
            $table->string('desc1');
            $table->string('desc2');
            $table->string('desc3');
            $table->string('image');
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
        Schema::dropIfExists('rooms');
    }
}

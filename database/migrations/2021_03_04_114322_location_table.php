<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('lid');
            $table->string('name', 255)->nullable(True);
            $table->string('street')->nullable(True);
            $table->string('address')->nullable(True);
            $table->string('city')->nullable(True);
            $table->string('pin')->nullable(True);
            $table->string('contact_person')->nullable(True);
            $table->string('mobile')->nullable(True);
            $table->integer('created_user_lid');
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
        Schema::dropIfExists('locations');
    }
}

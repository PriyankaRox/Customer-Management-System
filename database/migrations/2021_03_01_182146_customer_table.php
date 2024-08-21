<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->date('dob')->not-null;
            $table->String('gender')->not-null;
            $table->string('email')->unique;
            $table->integer('mobile')->not-null;
            $table->text('address')->not-null;
            $table->text('city')->not-null;
            $table->integer('pin')->not-null;
            $table->text('state')->not-null;
            $table->text('country')->not-null;
            $table->biginteger('adhar_number')->unique;
            $table->text('religion')->not-null;
            $table->text('caste')->not-null;
            $table->text('category')->not-null;
            $table->String('emergency_contacts')->not-null;
            $table->integer('created_user_cid');
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
        Schema::dropIfExists('customers');
    }
}

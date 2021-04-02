<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');  //foreign key
            $table->string('idnumber')->nullable();
            $table->string('title')->nullable();
            $table->integer('birthyear')->nullable();
            $table->string('city')->nullable();
            $table->text('description')->nullable();
            $table->string('profilepic')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('socialnetwork')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('education')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}

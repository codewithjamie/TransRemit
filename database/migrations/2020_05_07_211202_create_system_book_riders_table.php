<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemBookRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_book_riders', function (Blueprint $table) {
          $table->id();
          $table->string("name");
          $table->string("phone")->unique();
          $table->string("email")->nullable()->unique();
          $table->string("nationality");
          $table->string("state");
          $table->string("city");
          $table->string("id_type")->nullable();
          $table->string("id_number")->nullable();
          $table->string("branch");
          $table->string("qr_code")->nullable();
          $table->string("union");
          $table->string("keke_number");
          $table->string("rider_uid");
          $table->string("address");
          $table->string("image")->nullable();
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
        Schema::dropIfExists('system_book_riders');
    }
}

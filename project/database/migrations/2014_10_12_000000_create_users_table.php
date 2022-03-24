<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // NOT NULLABLE
            $table->string('email')->unique();
            $table->string('password', 30);
            $table->string('firstname', 60);
            $table->string('lastname', 60);
            $table->string('address');

            $table->rememberToken();
            $table->timestamps();

            // NULLABLE
            $table->string('cv')->nullable();
            $table->string('photo')->nullable();
            $table->string('phone', 20)->nullable();

            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

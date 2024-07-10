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
            $table->string('username')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('position');
            $table->string('profileImage')->nullable();
            $table->string('passportNumber')->index();
            $table->double('salary');
            $table->string('role');
            $table->unsignedBigInteger('workplaceId');
            $table->unsignedBigInteger('departmentId');
            $table->unsignedBigInteger('shiftId');

            $table->string('password');

            $table->rememberToken();
            $table->timestamps();

            $table->unique(['firstname', 'lastname']);
            $table->foreign('workplaceId')->references('id')->on('workplaces');
            $table->foreign('departmentId')->references('id')->on('departments');
            $table->foreign('shiftId')->references('id')->on('shifts');
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

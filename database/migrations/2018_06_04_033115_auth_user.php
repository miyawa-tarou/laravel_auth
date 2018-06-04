<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AuthUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm');
            $table->string('password');
            $table->timestamps();
        });

        $test = new App\AuthUser();
        $test->nm = 'test';
        $test->password = \Illuminate\Support\Facades\Hash::make('test_pass');
        $test->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_user');
    }
}

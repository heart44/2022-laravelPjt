<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();   //auto-increment 자동으로 들어가 있음
            $table->string('title', 30);    //string은 varchar(30)
            $table->string('ctnt'); //숫자 안적으면 그냥 계속 들어감
            $table->integer('hits');
            $table->timestamps();   //created_at, updated_at 자동으로 만들어 줌
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('boards');
    }
};

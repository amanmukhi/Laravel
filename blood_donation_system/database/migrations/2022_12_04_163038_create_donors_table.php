<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->enum('gender', ['M', 'F', 'O']);
            $table->integer('age')->nullable();
            $table->string('blood_gr', 10)->nullable();
            $table->string('unit', 10)->nullable();
            $table->string('phone', 20)->nullable();
            $table->enum('visible', ['v', 'i']);
            $table->string('address')->nullable();
            $table->string('state', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->enum('t_c', ['0', '1'])->nullable();
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
        Schema::dropIfExists('donors');
    }
};

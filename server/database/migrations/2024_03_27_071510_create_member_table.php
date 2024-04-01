<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('del_flag')->default(false);
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('fullname', 100);
            $table->boolean('is_male');
            $table->date('birthday')->nullable();
            $table->string('email', 100);
            $table->string('phone', 10)->nullable();
            $table->string('picture')->nullable()->default('avatar_default.jpg');
            $table->integer('access_level')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->timestamps();
            
            $table->foreign('access_level')->references('id')->on('configuration')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member');
    }
};

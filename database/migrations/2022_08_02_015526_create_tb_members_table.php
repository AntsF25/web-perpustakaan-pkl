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
        Schema::create('tb_members', function (Blueprint $table) {
            $table->id();
            $table->integer('nis')->unique();
            $table->string('name');
            $table->boolean('gender');//
            $table->string('class');//
            $table->string('major');//
            $table->date('birth_date');
            $table->string('phone_number');
            $table->string('address');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_members');
    }
};

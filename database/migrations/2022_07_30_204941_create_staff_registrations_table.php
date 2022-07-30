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
        Schema::create('staff_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('name');
            $table->boolean('gender');//
            $table->date('birth_date');
            $table->string('phone_number');
            $table->string('address');
            $table->text('description');
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_registrations');
    }
};
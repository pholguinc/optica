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
        Schema::create('queries', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('description');
            $table->enum('status', ['Activo', 'Inactivo'])->default('Inactivo');

            /*Right Eye*/
            $table->string('sphere_right');
            $table->string('cylinder_right');
            $table->string('axis_right');
            $table->string('av_right');

            /*Left Eye*/

            $table->string('sphere_left');
            $table->string('cylinder_left');
            $table->string('axis_left');
            $table->string('av_left');

            $table->string('dip_near');
            $table->string('dip_far');

            $table->text('observations');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

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
        Schema::dropIfExists('queries');
    }
};

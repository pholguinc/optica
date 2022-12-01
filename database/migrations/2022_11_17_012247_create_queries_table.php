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

            $table->string('sphereRf');
            $table->string('cylinderRf');
            $table->string('axisRf');
            $table->string('dipRf');


            $table->string('sphereLf');
            $table->string('cylinderLf');
            $table->string('axisLf');
            $table->string('dipLf');



            $table->string('sphereRn');
            $table->string('cylinderRn');
            $table->string('axisRn');
            $table->string('dipRn');


            $table->string('sphereLn');
            $table->string('cylinderLn');
            $table->string('axisLn');
            $table->string('dipLn');

            $table->text('diagnosis')->nullable();
            $table->date('control');

            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


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

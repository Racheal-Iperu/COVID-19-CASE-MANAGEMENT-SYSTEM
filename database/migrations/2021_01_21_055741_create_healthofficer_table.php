<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthofficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthofficer', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->enum('Gender',['Male','Female']);
            $table->string('Assigned hospital');
            $table->string('Officer username');
            $table->integer('Number of Patients treated');
            $table->decimal('Allowances',8,2);
            $table->integer('contact');
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
        Schema::dropIfExists('healthofficer');
    }
}

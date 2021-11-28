<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dentist_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->dateTime('birthdate');
            $table->enum('sex', ['m', 'f']);
            $table->string('religion');
            $table->string('nationality');
            $table->string('nickname');
            $table->string('home_address');
            $table->string('home_no');
            $table->string('office_no');
            $table->string('occupation');
            $table->string('fax_no');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('dental_insurance');
            $table->dateTime('effective_date');
            $table->string('guardian');
            $table->string('guardian_occupation');
            $table->string('referrer');
            $table->string('consultation_reason');
            $table->string('previous_dentist');
            $table->dateTime('last_visit_date');
            $table->softDeletes();
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
        Schema::dropIfExists('patients');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            /* Client info */
            $table->string('client_name');
            $table->string('client_surname');
            $table->string('client_patronymic')->nullable();
            $table->string('client_phone');
            $table->string('additional_phone')->nullable();

            /* Car info */
            $table->string('car_brand');
            $table->string('car_model');
            $table->year('car_production_year')->nullable();
            $table->string('car_vin_number')->nullable();

            /* Application info */
            $table->timestamp('date_time');
            $table->string('type_of_work');
            $table->integer('approximate _duration')->nullable();
            $table->string('description')->nullable();
            $table->string('status');

            /* Relations */
            $table->foreignId('user_id')->constrained();

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
        Schema::dropIfExists('applications');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);                     // Azienda
            $table->string('departing_station', 100);           // Stazione di partenza
            $table->string('arriving_station', 100);            //Stazione di arrivo
            $table->timeTz('departing_time', $precision = 4);   // Orario di partenza
            $table->timeTz('arriving_time', $precision = 4);    // Orario di arrivo
            $table->integer('train_number');                    // Codice Treno
            $table->integer('train_coaches');                   // Numero Carrozze
            $table->boolean('on_schedule');                     // In orario
            $table->boolean('cancelled');                       // Cancellato
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
        Schema::dropIfExists('trains');
    }
}

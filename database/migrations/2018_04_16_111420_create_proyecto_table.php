<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {

           $current_time = \Carbon\Carbon::now()->toDateTimeString();
           $end_time = \Carbon\Carbon::now()->addMonths(3)->toDateTimeString();

           $table->increments('id');
           $table->timestamp('data_inicio')->default($current_time);
           $table->timestamp('data_fin')->default($end_time);
           $table->string('hosting', 100);
           $table->unique('hosting');
           $table->string('ruta_archivos', 200);
           $table->enum('idiomas', ['en', 'es', 'de', 'fr', 'ru', 'ca', 'sv', 'no', 'it' ]);
           $table->json('estructura');
           $table->boolean('validacion');
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
        Schema::dropIfExists('proyecto');
    }
}

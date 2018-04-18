<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {

           $current_time = \Carbon\Carbon::now()->toDateTimeString();
           $end_time = \Carbon\Carbon::now()->addMonths(3)->toDateTimeString();

           $table->increments('id');
           $table->timestamp('start_time')->default($current_time);
           $table->timestamp('end_time')->default($end_time);
           $table->string('hosting', 100)->unique();
           $table->string('files_path', 200);
           $table->enum('languages', ['en', 'es', 'de', 'fr', 'ru', 'ca', 'sv', 'no', 'it' ]);
        //    $table->json('estructura');
           $table->boolean('validation');
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

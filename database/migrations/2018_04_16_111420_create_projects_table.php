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
           $table->string('name', 200);
           $table->string('dominio', 200);
           $table->string('contacto', 200);
           $table->tinyInteger('state');
           $table->string('hosting', 100)->unique();
           $table->string('structure_path', 200);
           $table->string('language',50);
           $table->boolean('validation');
           $table->timestamp('start_time')->default($current_time);
           $table->timestamp('end_time')->default($end_time);
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
        Schema::dropIfExists('projects');
    }
}

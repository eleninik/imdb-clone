<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('year');
            $table->string('age_rating')->nullable($value = true);
            $table->text('plot');
            $table->integer('production_country_id');
            $table->string('awards')->nullable($value = true);
            $table->string('poster');
            $table->string('backdrop');
            $table->string('trailer')->nullable($value = true);
            $table->integer('studio_id');
            $table->string('media_website')->nullable($value = true);
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
        Schema::dropIfExists('series');
    }
}

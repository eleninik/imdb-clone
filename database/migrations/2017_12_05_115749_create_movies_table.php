<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('year');
            $table->string('age_rating')->nullable($value = true);
            $table->date('released');
            $table->string('runtime');
            $table->text('short_plot');
            $table->text('full_plot');
            $table->integer('production_country_id');
            $table->string('awards')->nullable($value = true);
            $table->string('poster')->nullable($value = true);
            $table->string('backdrop')->nullable($value = true);
            $table->integer('studio_id');
            $table->string('media_website')->nullable($value = true);
            $table->string('trailer')->nullable($value = true);
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
        Schema::dropIfExists('movies');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchlistsTable extends Migration
{
   
    public function up()
    {
        Schema::create('watchlists', function (Blueprint $table) { 
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('item_id');
            $table->string('type');
            $table->boolean('watched')->default(false);
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
        Schema::dropIfExists('watchlists'); // Rename to 'lists' in the future.
    }
}

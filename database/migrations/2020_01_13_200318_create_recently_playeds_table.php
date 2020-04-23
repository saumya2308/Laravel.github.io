<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecentlyPlayedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recently_playeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('artist_name');
            $table->string('album_name');
            $table->string('track_name');
            $table->string('picture_url');
            $table->string('track_url');
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
        Schema::dropIfExists('recently_playeds');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('DisplayName');
            $table->string('ArtistBio')->nullable();
            $table->string('Nationality')->nullable();
            $table->string('Gender')->nullable();
            $table->string('BeginDate')->nullable();
            $table->string('EndDate')->nullable();
            $table->string('Wiki_QID')->nullable();
            $table->string('ULAN')->nullable();
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
        Schema::dropIfExists('artists');
    }
}

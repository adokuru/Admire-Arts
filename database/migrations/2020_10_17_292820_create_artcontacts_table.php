<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtcontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artcontacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('art_id');
            $table->foreign('art_id')->references('id')->on('art')->onDelete('cascade');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('note');
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
        Schema::dropIfExists('artcontacts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table-> string('title');
            $table-> string('editor');
            $table-> string('author');
            $table-> string('designer');
            $table-> string('genre');
            $table-> float('price', 8, 2);
            $table-> year('pubblication_year');
            $table-> integer('quantity_in_store');
            $table-> text('description');

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
        Schema::dropIfExists('comics');
    }
};

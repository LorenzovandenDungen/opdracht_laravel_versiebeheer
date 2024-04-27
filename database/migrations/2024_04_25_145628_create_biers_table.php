<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biers', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->unsignedBigInteger('valt_onder_id')->nullable();
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->timestamps();

            $table->foreign('valt_onder_id')->references('id')->on('biers')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biers');
    }
}

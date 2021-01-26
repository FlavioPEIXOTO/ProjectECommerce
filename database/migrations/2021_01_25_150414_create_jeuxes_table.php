<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJeuxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeuxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->unique();
            $table->text('description');
            $table->string('photo')->nullable();
            $table->integer('quantite');
            $table->integer('prix');
            $table->string('code_activation');
            $table->string('ps4')->nullable();
            $table->string('ps5')->nullable();
            $table->string('xbox_one')->nullable();
            $table->string('xbox_serie_x')->nullable();
            $table->string('switch')->nullable();
            $table->string('pc')->nullable();
            $table->string('action')->nullable();
            $table->string('aventure')->nullable();
            $table->string('jeu_de_tir')->nullable();
            $table->string('rpg')->nullable();
            $table->string('horreur')->nullable();
            $table->string('sport')->nullable();
            $table->string('combat')->nullable();
            $table->string('course')->nullable();
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
        Schema::dropIfExists('jeuxes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proprietes',function(Blueprint $table){
            $table->id();
            $table->integer('user_id');
            $table->string('type');
            $table->double('surface');
            $table->double('prix');
            $table->string('adresse');
            $table->integer('chambres');
            $table->integer('salles_de_bains');
            $table->integer('balcons');
            $table->integer('piscines');
            $table->integer('jardin');
            $table->integer('garages');
            $table->string('description');
            $table->string('updated_at');
            $table->string('created_at');
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietes');

    }
}

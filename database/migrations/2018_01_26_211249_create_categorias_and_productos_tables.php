<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasAndProductosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function(Blueprint $table)
        {
                $table->increments('id');
                $table->string('name')->default('');
                $table->string('slug')->default('');
                $table->string('imagen')->default('');
                $table->timestamps();
        });

        Schema::create('productos', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('categoria_id')->unsigned()->default(0);
                $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
                $table->string('slug')->default('');
                $table->string('name')->default('');
                $table->string('imagen')->default('');
                $table->text('description');
                $table->integer('precio');
                $table->integer('descuento');
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
        Schema::dropIfExists('categorias');
    }
}

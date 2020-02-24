<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function ($table) {
            $table->integer('id')
                ->unsigned()
                ->autoIncrement();
            $table->integer('parent_id');
            $table->string('alias')->unique();
            $table->string('name')
                ->unique()
                ->charset('latin1')
                ->collate('latin1_general_ci');
            $table->string('fa-icon')
                ->nullable($value = true)
                ->default(null);
            $table->integer('order')
                ->nullable($value = true)
                ->default(null);
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
        Schema::dropIfExists('menus');
    }
}
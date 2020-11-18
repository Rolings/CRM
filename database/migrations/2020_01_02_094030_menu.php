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
            $table->uuid('id')->primary();
            $table->uuid('parent_id')->nullable($value = true)->default(null);
            $table->string('lang');
            $table->string('alias')->uniqid();
            $table->string('name')->nullable($value = true);
            $table->string('model')->nullable($value = true);
            $table->string('fa-icon')->nullable($value = true)->default(null);
            $table->string('image')->nullable($value = true);
            $table->string('route')->nullable($value = true);
            $table->string('view')->nullable($value = true);
            $table->boolean('is_active')->nullable($value = true);
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

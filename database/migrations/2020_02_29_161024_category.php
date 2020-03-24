<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function ($table) {
            $table->uuid('id')->primary();
            $table->uuid('parent_id');
            $table->string('alias');
            $table->string('name')->nullable($value = true);
            $table->text('description')->nullable($value = true);
            $table->string('fa-icon')
                ->nullable($value = true)
                ->default(null);
            $table->string('image')->nullable($value = true);
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
        Schema::dropIfExists('categories');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function ($table) {
            $table->uuid('id')->primary();
            $table->uuid('role_id')
                ->foreign('role_id')
                ->references('id')
                ->on('role');
            $table->string('route')
                ->nullable($value = false);
            $table->boolean('status')
                ->nullable($value = false)
                ->default(false);
            $table->integer('order')
                ->nullable($value = true)
                ->default(0);
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
        Schema::dropIfExists('permissions');
    }
}

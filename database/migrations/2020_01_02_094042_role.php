<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Role extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function ($table) {
            $table->uuid('id')->primary();
            $table->uuid('group_id')
                ->foreign('group_id')
                ->references('id')
                ->on('role_group');
            $table->string('name')
                ->unique()
                ->charset('latin1')
                ->collate('latin1_general_ci');
            $table->string('fa-icon')
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
        Schema::dropIfExists('roles');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_groups', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name')
                ->unique()
                ->charset('latin1')
                ->collate('latin1_general_ci');
            $table->string('fa-icon');
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
        Schema::dropIfExists('role_groups');
    }
}

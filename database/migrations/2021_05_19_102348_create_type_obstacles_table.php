<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeObstaclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_obstacles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_traversable');
            $table->string('ia_effect_if_traverse')->nullable();
            $table->string('apparence');
            $table->integer('nbr_min_per_level');
            $table->integer('nbr_max_per_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_obstacles');
    }
}

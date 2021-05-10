<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("sofa");
            $table->string("tv");
            $table->string("arm Chair");
            $table->string("lounge table");
            $table->string("lamp");
            $table->string("tv stand");
            $table->string("table end");
            $table->string("sectional sofa");
            $table->string("glass lounge table");
            $table->string("rug");
            $table->string("picture_p_p");
            $table->string("p_p_p")->comment('Picture / Poster / Painting');
            $table->string('ottoman');
            $table->string('bookcase');
            $table->string('mirror');
            // Bedroom
            $table->string('dresser');
            $table->string('bed');
            $table->string('night_stand');
            $table->string('mirror');
            $table->string('lamp');
            $table->string('tv');
            $table->string('desk');
            $table->string('mattress');
            $table->string('office_chair');
            $table->string('bookcase');
            $table->string('arm chair');
            $table->string('t_p_c')->comment('Tote / plastic bin W/Contents');
            $table->string("p_p_p")->comment('Picture / Poster / Painting');
            $table->string('walk_in_closet');
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
        Schema::dropIfExists('items');
    }
}

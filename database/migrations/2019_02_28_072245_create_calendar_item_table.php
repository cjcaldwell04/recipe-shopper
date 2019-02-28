<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_item', function (Blueprint $table) {
            $table->bigIncrements('calendar_id');
            $table->integer('recipe_id');
            $table->integer('user_id')->unsigned();
            $table->date('day');
            $table->enum('meal', array("Breakfast", "Lunch", "Dinner"));
            $table->timestamps();
        });

        Schema::table('calendar_item', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_item');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggi', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 6, 2);
            $table->string('place', 50);
            $table->text('description');
            $table->smallInteger('duration', 50)->unsigned();
            $table->string('residence_type', 50);
            $table->string('image');
            $table->string('travel_style', 25);
            $table->string('tour', 25);
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
        Schema::dropIfExists('viaggi');
    }
}

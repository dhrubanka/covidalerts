<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenterTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('center_trackings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('stateid');
            $table->bigInteger('districtid');
            $table->bigInteger('centerid');
            $table->string('name');
            $table->date('date');
            $table->integer('capacity');
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
        Schema::dropIfExists('center_tracking');
    }
}

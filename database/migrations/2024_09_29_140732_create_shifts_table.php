<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->increments(column: "ShiftID");
            $table->string(column: 'Name');
            $table->time(column: 'StartTime', precision: 0);
            $table->time(column: 'EndTime', precision: 0);
            $table->dateTime(column: "ModifiedDate", precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shifts');
    }
};

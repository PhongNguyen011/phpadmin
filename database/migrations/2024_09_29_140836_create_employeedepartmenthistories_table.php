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
        Schema::create('employeedepartmenthistories', function (Blueprint $table) {
            $table->integer(column: "BusinessEntityID") -> unsigned();
            $table->integer(column: "DepartmentID") -> unsigned();
            $table->integer(column: "ShiftID") -> unsigned();
            $table->date(column: "StartDate");
            $table->date(column: "EndDate") -> nullable();
            $table->dateTime(column: "ModifiedDate", precision: 0);

            $table -> primary(["BusinessEntityID", "DepartmentID", "ShiftID", "StartDate"]);

            $table -> foreign("BusinessEntityID") -> references(columns: "BusinessEntityID") -> on(table: "employee");
            $table -> foreign("DepartmentID") -> references(columns: "DepartmentID") -> on(table: "department");
            $table -> foreign("ShiftID") -> references(columns: "ShiftID") -> on(table: "shift");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeedepartmenthistories');
    }
};

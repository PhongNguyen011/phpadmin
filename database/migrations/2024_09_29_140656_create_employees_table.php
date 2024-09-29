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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments(column: "BusinessEntityID");
            $table->string(column: "NationalIDNumber");
            $table->string(column: "LoginID");
            $table->string(column: "OrganizationNode");
            $table->smallInteger(column: "OrganizationLevel");
            $table->string(column: "JobTitle");
            $table->date(column: "BirthDate");
            $table->char(column: "MaritalStatus", length: 1);
            $table->char(column: "Gender", length: 1);
            $table->date(column: "HireDate");
            $table->smallInteger(column: "VacationHours");
            $table->smallInteger(column: "SickLeaveHours");
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
        Schema::dropIfExists('employees');
    }
};

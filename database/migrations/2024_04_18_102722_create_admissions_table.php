<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('Registeration',100);
            $table->string('Name',50);
            $table->string('DOB',100);
            $table->string('AgeWhenEnrolled',10);
            $table->string('Gender',100);
            $table->string('FatherName',100);
            $table->string('MotherName',100);
            $table->string('FatherQualification',10);
            $table->string('MotherQualification',10);
            $table->string('FatherOcupation',2);
            $table->string('MotherOcupation',2);
            $table->string('MonthlyIncome',10);
            $table->string('OtherSourceOfIncome',100);
            $table->string('Amount',10);
            $table->string('Address',500);
            $table->string('FatherCellNo',12);
            $table->string('MotherCellPhone',12);
            $table->string('EmergencyContact',12);
            $table->string('ChildAmongHisSiblings',2);
            $table->string('FamilySystem',2);
            $table->string('TotalNumberofFamily',2);
            $table->string('FirstLanguage',2);
            $table->boolean('Status');
            $table->string('Fees',10);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};

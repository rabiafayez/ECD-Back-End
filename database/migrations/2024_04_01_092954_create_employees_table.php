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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Name',50);
            $table->string('LastName',50);
            $table->string('FatherName',50);
            $table->string('ContractID',10);
            $table->string('DateOfJoining',50);
            $table->string('BankAccountInfo',50);
            $table->string('BankName',50);
            $table->string('TinNumber',100);
            $table->string('NIDType',10);
            $table->string('NIDNumber',80);
            $table->string('Address',500);
            $table->string('ContactNumber',30);
            $table->string('Email',200);
            $table->string('Education',10);
            $table->string('TINDocument');
            $table->string('AllDocument');
            $table->string('CV');
            $table->string('TazkiraDocument');
            $table->string('Photo');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

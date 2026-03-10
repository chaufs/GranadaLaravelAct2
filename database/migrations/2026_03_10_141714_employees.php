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
            $table->id('employee_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table ->string('phone_number');
            $table ->date('hire_date');
            $table ->foreignId('job_id')->constrained('jobs');
            $table->decimal('salary', 8, 2);
            $table ->foreignId('manager_id')->nullable()->constrained('employees', 'employee_id');
            $table->foreignId('department_id')->constrained('departments');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        Schema::create('meets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->timestamp('start')->nullable();;
            $table->timestamp('end')->nullable();;
            $table->unsignedBigInteger('transaction_id')->nullable();
            $table->unsignedBigInteger('price')->nullable();
            $table->string('type')->default('pay');
            $table->timestamp('edit')->nullable();
            $table->timestamp('cancel')->nullable();
            $table->timestamp('t_click')->nullable();
            $table->timestamp('s_click')->nullable();
            $table->string('canceled')->nullable();
            $table->string('status')->default('free')->nullable();
            $table->string('pair')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meets');
    }
};

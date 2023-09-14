<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->integer('fine')->default(0);
            $table->date('issue')->default(Carbon::now()->toDateString());
            $table->date('due')->default(Carbon::now()->addDays(30)->toDateString());
            $table->integer('return')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};

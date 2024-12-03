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
        Schema::create('narapidana', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable(false);
            $table->integer("age")->nullable(false);
            $table->string("gender")->nullable(false);
            // $table->string("case")->nullable(false);

            // dikomen dulu. hati2
            $table->foreignId('case')->constrained('case_violations')->onDelete('cascade');
            $table->integer("sentence")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('narapidanas');
    }
};

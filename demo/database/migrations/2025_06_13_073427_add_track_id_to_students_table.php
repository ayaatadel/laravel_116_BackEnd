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
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // add track id (foreign key )in students table

            //   $table->unsignedBigInteger('track_id');

            //   $table->foreign('track_id')->references('id')->on('tracks');


            // $table->foreignId('track_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId('track_id')->nullable()->constrained()->onDelete('cascade')->cascadeOnUpdate();
            ///

        });
    }
};

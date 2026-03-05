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
        Schema::create('stock', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('item_id')->unique();
    $table->integer('quantity')->default(0);
    $table->timestamps();

    $table->foreign('item_id')
        ->references('item_id')
        ->on('item')
        ->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stock', function (Blueprint $table) {
            $table->dropForeign(['item_id']);
        });
    }
};
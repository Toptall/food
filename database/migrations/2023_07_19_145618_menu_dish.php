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
        Schema::create('menu_dish', function (Blueprint $table) {
            $table->unsignedInteger("menu_id")->comment("Связь с меню");
            $table->unsignedInteger("dish_id")->comment("Связь с блюдами");
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shoes', function (Blueprint $table) {
            $table->string('name');
            $table->string('brand');
            $table->decimal('price', 12, 2);
            $table->string('size_range');
            $table->string('image');
            $table->string('sport_type');
        });
    }

    public function down(): void
    {
        Schema::table('shoes', function (Blueprint $table) {
            $table->dropColumn([
                'name',
                'brand',
                'price',
                'size_range',
                'image',
                'sport_type',
            ]);
        });
    }
};
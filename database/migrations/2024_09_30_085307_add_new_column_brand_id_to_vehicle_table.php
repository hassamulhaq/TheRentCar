<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Check if the 'brand' column exists before dropping it
            if (Schema::hasColumn('vehicles', 'brand')) {
                $table->dropColumn('brand');
            }

            $table->foreignId('brand_id')
                ->nullable()
                ->after('slug')
                ->constrained('brands')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Add the brand column back if it was previously dropped
            $table->string('brand')->nullable();
            $table->dropForeign(['brand_id']);
            $table->dropColumn('brand_id');
        });
    }
};


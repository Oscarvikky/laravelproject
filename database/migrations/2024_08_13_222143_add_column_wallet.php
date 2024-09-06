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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->decimal('wallet')->default(0.00);
            $table->decimal('profitsharing')->default(0.00);
            $table->decimal('Escrowwallet')->default(0.00);
            $table->decimal('nodropwalletbasic')->default(0.00);
            $table->decimal('nodropwalletbasic2')->default(0.00);
            $table->decimal('nodropwallectultimate')->default(0.00);
            $table->decimal('nodropwallectultimate2')->default(0.00);
            $table->decimal('giftwallet')->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

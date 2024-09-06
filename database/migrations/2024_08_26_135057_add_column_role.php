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
            $table->string("role")->default('user');
            $table->string("country")->nullable();
            $table->decimal('wallet', 8,2)->default(0);
            $table->decimal('forex')->default(false);
            $table->decimal('escrow_wallet' , 8,2)->default(0);
            $table->decimal('profit_sharing' , 8,2)->default(0);
            $table->decimal('gift_wallet',8,2)->default(0);
            $table->decimal('no_deposit_basic1_wallet1' , 8,2)->default(0);
            $table->decimal('no_deposit_basic2_wallet2' , 8,2)->default(0);
            $table->decimal('no_deposit_ultimate1_wallet' , 8,2)->default(0);
            $table->decimal('no_deposit_ultimate2_wallet2' , 8,2)->default(0);
            $table->decimal('activate_no_deposit_basic1_wallet')->default(false);
            $table->decimal('activate_no_deposit_basic2_wallet')->default(false);
            $table->decimal('activate_no_deposit_ultimate1_wallet')->default(false);
            $table->decimal('activate_no_deposit_ultimate2_wallet')->default(false);

            

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

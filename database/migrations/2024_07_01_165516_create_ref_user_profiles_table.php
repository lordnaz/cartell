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
        Schema::create('ref_user_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');  // Auth::user()->id
            $table->boolean('bank_info')->default(false);
            $table->boolean('personal_info')->default(false);
            $table->boolean('address_info')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_user_profiles');
    }
};

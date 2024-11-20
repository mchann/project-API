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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name');
            $table->string(column:'email');
            $table->string(column:'password');
            $table->string(column:'phone_number');
            $table->string(column:'referal_code')->nullable();
            $table->enum(column:'jenis_pengguna', allowed:['admin','kasir',
        'pembeli'])->default(value:'pembeli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};

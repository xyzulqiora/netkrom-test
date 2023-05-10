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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('nomor_id');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nomor_id')->constrained('biodata')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['belum terpakai', 'terpakai']);
            $table->rememberToken();
            $table->timestamps();
        });


        // Schema::create('status', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('status');
        //     $table->string('biodata_id')->constrained('biodata')->onUpdate('cascade')->onDelete('cascade');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('biodata');
    }
};

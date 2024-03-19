<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('role_id')->default(3)->constrained('roles')->onDelete('cascade'); 
            $table->string('phone_number')->nullable(); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Insertar usuario predeterminado 
        DB::table('users')->insert([
            'name' => 'Jhan valbuena',
            'role_id' => 3, //Asigna el id del rol correspondiente 
            'phone number' => '3202616545',
            'email' => 'carlosWP03@gmail.com',
            'password' => Hash::make('123456789'), //Contraseña estandar 
            'created_at' => now(),
            'update_at' => now(),
        ]); 
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}; 

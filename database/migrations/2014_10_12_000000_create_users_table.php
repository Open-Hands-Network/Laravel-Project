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
            $table->string('image')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('bio');
            $table->string('job');
            $table->boolean('isAdmin')->default(0); //Instead of Whole Admin table.
            $table->string("privilege")->nullable(); //Instead of Whole Admin table. Read-Only or Write-Only or Both.
            $table->string('nationalID'); //Used string() instead of bigInteger BC some National IDs contains characters (excluding Egypt).
            $table->string("phone"); //Used string() instead of numeric type to avoid issues.
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

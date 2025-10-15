<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->string('full_name');
        $table->string('phone_number')->nullable();
        $table->date('date_of_birth')->nullable();
        $table->string('avatar_url')->nullable();
        $table->foreignId('satuan_id')->nullable()->constrained('satuans')->nullOnDelete();
        $table->foreignId('batalyon_id')->nullable()->constrained('batalyons')->nullOnDelete();
        $table->foreignId('ranks_id')->nullable()->constrained('ranks')->nullOnDelete();
        $table->foreignId('regus_id')->nullable()->constrained('regus')->nullOnDelete();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('profiles');
}

};

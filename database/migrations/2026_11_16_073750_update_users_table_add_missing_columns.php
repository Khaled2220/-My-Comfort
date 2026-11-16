<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'full_name');
            $table->string('phone');
            $table->string('address');
            $table->unsignedTinyInteger('user_type')->default(2);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('full_name', 'name');
            $table->dropColumn(['phone', 'address', 'user_type']);
        });
    }
};

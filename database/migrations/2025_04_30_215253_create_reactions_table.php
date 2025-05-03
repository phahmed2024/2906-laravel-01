<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\ReactionType;
use App\Models\Comment;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->foreignidfor(Comment::class)->constrained()->cascadeOnDelete();
            $table->string('type_name');
            $table->foreignIdfor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdfor(ReactionType::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reactions');
    }
};

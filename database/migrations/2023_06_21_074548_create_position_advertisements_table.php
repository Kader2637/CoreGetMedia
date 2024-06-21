<?php

use App\Enums\AdvertisementEnum;
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
        Schema::create('position_advertisements', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->text('image');
            $table->string('price');
            $table->enum('page', [AdvertisementEnum::HOME->value, AdvertisementEnum::SINGLEPOST->value, AdvertisementEnum::CATEGORY->value, AdvertisementEnum::SUBCATEGORY->value]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position_advertisements');
    }
};

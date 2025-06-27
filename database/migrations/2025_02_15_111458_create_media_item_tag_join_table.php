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
        Schema::create('media_item_tag', function (Blueprint $table) {
            $table->integer('media_item_id')->unsigned()->index();
            $table->foreign('media_item_id')->references('id')->on('media_item')->onDelete('cascade');
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tag')->onDelete('cascade');
            $table->primary(['media_item_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_item_tag_join');
        Schema::dropIfExists('media_item_tag');
    }
};

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
        Schema::create('tag', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('handle');
            $table->timestamps();
            $table->softDeletes();
        });

        
        DB::table('tag')->insert([ 'id'=>'1', 'type'=>'art', 'handle'=>'pencil' ]);
        DB::table('tag')->insert([ 'id'=>'2', 'type'=>'art', 'handle'=>'ink' ]);
        DB::table('tag')->insert([ 'id'=>'3', 'type'=>'art', 'handle'=>'digital' ]);
        DB::table('tag')->insert([ 'id'=>'4', 'type'=>'art', 'handle'=>'character' ]);
        DB::table('tag')->insert([ 'id'=>'5', 'type'=>'art', 'handle'=>'animal' ]);
        DB::table('tag')->insert([ 'id'=>'6', 'type'=>'art', 'handle'=>'enviroment' ]);
        DB::table('tag')->insert([ 'id'=>'7', 'type'=>'art', 'handle'=>'referenced' ]);
        DB::table('tag')->insert([ 'id'=>'8', 'type'=>'art', 'handle'=>'imagination' ]);
        DB::table('tag')->insert([ 'id'=>'9', 'type'=>'art', 'handle'=>'sketch' ]);
        DB::table('tag')->insert([ 'id'=>'10', 'type'=>'art', 'handle'=>'portrait' ]);
        DB::table('tag')->insert([ 'id'=>'11', 'type'=>'art', 'handle'=>'landscape' ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag');
    }
};

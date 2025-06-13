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
        DB::table('users')->insert
        ([
            'name' => 'Will Roy',
            'email' => 'willjoroy@gmail.com',
            'password' => Hash::make('wowZA!jak')
        ]);

        // !!! change above password and move into enviroment variable on server before making github repo public !!!
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

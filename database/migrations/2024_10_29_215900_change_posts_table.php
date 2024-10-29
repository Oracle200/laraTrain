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
        Schema::table('posts', function (Blueprint $table) {
			//$table->string('title');
			//$table->text('desc');

            //$table->string('title', 100)->change();

            //$table->dropColumn(['name', 'desc']);

            //$table->renameColumn('name', 'titleee');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

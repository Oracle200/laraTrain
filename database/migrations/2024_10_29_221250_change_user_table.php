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
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn(['name', 'surname']);

            //$table->renameColumn('name', 'first_name');
            //$table->renameColumn('surname', 'second_name');

            $table->string('email', 200)->comment('это почка пользователя')->unique();
            $table->integer('salary')->default(0);
            $table->integer('age')->unsigned()->nullable();

            $table->string('name')->first()->change();
            $table->string('sex', 20)->nullable()->after('id');
        });

        //Schema::dropIfExists('user');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

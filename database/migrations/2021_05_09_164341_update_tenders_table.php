<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenders', function (Blueprint $table) {
            $table->after('ref', function ($table) {
                $table->string('source')->nullable();
                $table->string('source_ref')->nullable();
            });
            $table->after('dce_count', function ($table) {
                $table->string('geo_lat')->nullable();
                $table->string('geo_lng')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('tenders', function (Blueprint $table) {
        //     //
        // });
    }
}

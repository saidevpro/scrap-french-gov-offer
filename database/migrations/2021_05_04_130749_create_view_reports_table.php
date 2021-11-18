<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_reports', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('type');
            $table->string('ip')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('reportable_id')->nullable();
            $table->string('reportable_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_reports');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_card', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('company_id')->nullable();
            $table->string('category')->nullable();
            $table->string('logo')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('galery')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('function')->nullable();
            $table->string('service')->nullable();
            $table->string('website')->nullable();
            $table->string('intervention_regions')->nullable();
            $table->string('ref_public_clients')->nullable();
            $table->string('ref_private_clients')->nullable();
            $table->string('certifications')->nullable();
            $table->text('job')->nullable();
            $table->text('proposition')->nullable();
            $table->text('daily_opening')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_card');
    }
}

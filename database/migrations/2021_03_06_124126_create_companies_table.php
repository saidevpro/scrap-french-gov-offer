<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('category_id')->nullable();
            $table->string('siret')->nullable();
            $table->text('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('legal_form')->nullable();
            $table->date('creation_date')->nullable();
            $table->string('code_naf')->nullable();
            $table->integer('number_employees')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('in')->nullable();
            $table->string('yt')->nullable();
            $table->string('ins')->nullable();
            $table->string('gp')->nullable();
            $table->string('search_keywords')->nullable();
            $table->string('search_xkeywords')->nullable();
            $table->string('website')->nullable();
            $table->string('intervention_zone')->nullable();
            $table->string('turnover_slice')->nullable();
            $table->text('description')->nullable();
            $table->text('services')->nullable();

            $table->text('logo')->nullable();
            $table->string('galery')->nullable();
            $table->string('short_description')->nullable();
            $table->text('working_days')->nullable();
            $table->string('certifications')->nullable();
            $table->text('intervention_zones')->nullable();
            $table->string('ref_public_clients')->nullable();
            $table->string('ref_private_clients')->nullable();
            $table->integer('year_of_experience')->nullable();
            $table->integer('quote_duration')->nullable();
            $table->string('zone_type')->nullable();
            $table->string('page_url')->nullable();
            $table->string('is_page_published')->nullable();

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
        Schema::dropIfExists('companies');
    }
}

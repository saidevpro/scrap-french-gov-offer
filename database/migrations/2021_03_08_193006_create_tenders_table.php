<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->unique();
            $table->string('rec_id')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('title')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('nature')->nullable();
            $table->longText('content')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('activity_id')->nullable();
            $table->integer('procedure_type_id')->nullable();
            $table->integer('budget_type_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('company_id')->nullable();
            //$table->integer('tags_id');
            $table->dateTime('release_date')->nullable();
            $table->dateTime('closing_date')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('link')->nullable();

            $table->integer('code')->nullable();
            $table->string('label')->nullable();
            $table->string('resume')->nullable();
            $table->string('denomination')->nullable();
            $table->string('reporter')->nullable(); // Correspondant du marché
            $table->string('contact')->nullable();
            // $table->string('address_line1');
            $table->string('tel')->nullable();
            $table->string('mel')->nullable();
            $table->string('url')->nullable();
            $table->string('url_profil')->nullable();
            $table->string('url_information')->nullable();
            $table->string('url_participation')->nullable();
            $table->text('place_exec')->nullable();
            $table->string('code_nuts')->nullable();
            $table->string('duration_year')->nullable();
            $table->string('duration_month')->nullable();
            $table->text('crm_funding')->nullable(); //CONDITION_RELATIVE_MARCHE
            $table->text('crm_legal_form')->nullable();
            $table->string('crm_langue')->nullable();
            $table->longText('cp_legal_situation')->nullable(); //CONDITION_PARTICIPATION
            $table->text('cp_eco')->nullable();
            $table->text('cp_tech')->nullable();
            $table->text('ca_ref')->nullable(); //CONDITION_ADMINISTRATIVE
            $table->longText('rc_complement_info')->nullable(); //RENSEIGNEMENTS_COMPLEMENTAIRES  RENS COMPLEMENT
            $table->longText('dce_count')->nullable(); //RENSEIGNEMENTS_COMPLEMENTAIRES  RENS COMPLEMENT
            $table->longText('searchable_content')->nullable();
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
        Schema::dropIfExists('tenders');
    }
}

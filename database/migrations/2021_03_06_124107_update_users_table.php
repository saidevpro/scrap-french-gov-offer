<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->after('id', function ($table) {
                $table->integer('parent_id')->nullable();
                $table->integer('company_id')->nullable();
                $table->integer('account_types_id')->nullable();
                $table->string('civility')->nullable();
            });

            $table->after('name', function ($table) {
                $table->string('last_name');
                $table->string('slug')->unique();
                $table->string('code_phone')->nullable();
                $table->string('phone')->nullable();
                $table->string('fonction')->nullable();
            });
            $table->renameColumn('name', 'first_name');

            $table->after('remember_token', function ($table) {
                $table->string('address_line1')->nullable();
                $table->string('address_line2')->nullable();
                $table->string('zip_code')->nullable();
                $table->integer('department_id')->nullable();
                $table->integer('city_id')->nullable();
                $table->integer('country_id')->nullable();
                $table->dateTime('last_connection')->nullable();
            });
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('company_id');
            $table->dropColumn('account_types_id');
            $table->dropColumn('civility');
            $table->dropColumn('last_name');
            $table->dropColumn('code_phone');
            $table->dropColumn('phone');
            $table->dropColumn('address_line1');
            $table->dropColumn('address_line2');
            $table->dropColumn('zip_code');
            $table->dropColumn('city_id');
            $table->dropColumn('department_id');
            $table->dropColumn('country_id');
            $table->dropColumn('last_connection');
            $table->dropColumn('deleted_at');
            $table->renameColumn('first_name', 'name');
        });
    }
}

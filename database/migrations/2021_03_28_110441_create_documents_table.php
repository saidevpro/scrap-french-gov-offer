<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('neomarches_documents')->create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('type');
            $table->integer('document_type_id')->nullable();
            $table->longText('base64');
            $table->integer('size');
            $table->text('path')->nullable();
            $table->morphs('documentable');
            $table->integer('user_id')->nullable();
            $table->integer('folder_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('neomarches_documents')->dropIfExists('documents');
    }
}

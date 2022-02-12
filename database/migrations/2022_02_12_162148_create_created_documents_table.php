<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatedDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('created_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_template_id');
            $table->unsignedBigInteger('user_owner_id');
            $table->string('document_path');
            $table->string('document_version');
            $table->timestamps();

            $table->foreign('document_template_id')->references('id')->on('document_templates');
            $table->foreign('user_owner_id')->references('user_creator_id')->on('document_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('created_documents');
    }
}

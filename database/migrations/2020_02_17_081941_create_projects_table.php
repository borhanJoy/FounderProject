<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name')->nullable();
            $table->string('project_category')->nullable();
            $table->string('location')->nullable();
            $table->string('project_image')->nullable();
            $table->longText('short_details')->nullable();
            $table->longText('full_details')->nullable();
            $table->longText('project_budget')->nullable();
            $table->string('details_file')->nullable();
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
        Schema::dropIfExists('projects');
    }
}

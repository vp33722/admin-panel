<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('latest_version')->default('1.0');
            $table->boolean('is_force_update')->default(false);
            $table->string('title_of_ad')->nullable();
            $table->string('messge_of_ad')->nullable();
            $table->string('link',256)->nullable();
            $table->string('contact_email')->nullable();
            $table->string('share_format')->nullable();
            $table->string('contact_format')->nullable();
            $table->string('developer_site',256)->nullable();
            $table->string('developer_name')->nullable();
            $table->string('developer_apps',256)->nullable();
            $table->string('generated_in_app')->nullable();
            $table->boolean('is_only_banner')->default(false);
            $table->unsignedInteger('app_platform_id');
            $table->foreign('app_platform_id')->references('id')->on('plateform')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('apps');
    }
}

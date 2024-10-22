<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_banners', function (Blueprint $table) {
            $table->id();
            $table->string('text_1')->nullable()->comment('Banner Text');
            $table->string('text_2')->nullable()->comment('Banner Text');
            $table->string('text_3')->nullable()->comment('Banner Text');
            $table->string('button_text')->nullable()->comment('Banner Button Text'); 
            $table->longText('button_link')->nullable()->comment('Banner Button Link'); 
            $table->longText('banner_bg_img')->nullable()->comment('Banner BG image'); 
            $table->longText('banner_main_img')->nullable()->comment('Banner Main image'); 
            $table->longText('banner_trademark_img')->nullable()->comment('Banner Trademark image'); 

            $table->integer('status')->default(1)->comment('Primary key of the status table');               
            $table->integer('created_by')->nullable()->comment('Login id of user who creates the entry');
            $table->integer('updated_by')->nullable()->comment('Login id of user who updates the entry');  
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
        Schema::dropIfExists('home_banners');
    }
};

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
        Schema::create('recipes_details_sections', function (Blueprint $table) {
            $table->id();
            $table->string('text_1')->nullable()->comment('Banner Image');
            $table->string('text_2')->nullable()->comment('Banner Image');
            $table->string('text_3')->nullable()->comment('Banner Image');
            $table->string('banner_img')->nullable()->comment('Banner Image');
            $table->string('banner_bg_img')->nullable()->comment('Banner Image');

            $table->string('video_img')->nullable()->comment('Us Beef Image');            
            $table->longText('video_link')->nullable()->comment('Us Pork Image'); 
            $table->string('video_text_1')->nullable()->comment('Button Text'); 
            $table->string('video_text_2')->nullable()->comment('Button Text'); 
            $table->longText('video_text_description')->nullable()->comment('Button Text'); 

            $table->string('ingredientes_text_1')->nullable()->comment('Button Text');
            $table->string('ingredientes_text_2')->nullable()->comment('Button Text');
            $table->longText('ingredientes')->nullable()->comment('Button Text');
            $table->string('ingredientes_img')->nullable()->comment('Button Text');

            $table->string('preparation_text_1')->nullable()->comment('Button Text');
            $table->string('preparation_text_2')->nullable()->comment('Button Text');
            $table->longText('preparation_description')->nullable()->comment('Button Text');
            $table->longText('preparation_description_1')->nullable()->comment('Button Text');
            $table->longText('preparation_description_2')->nullable()->comment('Button Text');
            $table->longText('preparation_description_3')->nullable()->comment('Button Text');
            $table->string('preparation_img')->nullable()->comment('Button Text');
            $table->string('preparation_img_full')->nullable()->comment('Button Text');
            $table->string('btn_txt')->nullable()->comment('Button Text');
            $table->longText('btn_link')->nullable()->comment('Button Text');
 
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
        Schema::dropIfExists('recipes_details_sections');
    }
};

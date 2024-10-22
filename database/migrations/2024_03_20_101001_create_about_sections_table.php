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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('banner_img')->nullable()->comment('Banner Image');
            $table->longText('video_link')->nullable()->comment('Bescription');
            $table->longText('us_meat_img')->nullable()->comment('Bescription');
            $table->longText('us_meat_tooltip_txt')->nullable()->comment('Bescription');
            $table->longText('us_meat_description')->nullable()->comment('Bescription');
            $table->longText('us_beef_img')->nullable()->comment('Bescription');
            $table->longText('us_beef_tooltip_txt')->nullable()->comment('Bescription');
            $table->longText('us_beef_description')->nullable()->comment('Bescription');
            $table->longText('us_pork_img')->nullable()->comment('Bescription');
            $table->longText('us_pork_tooltip_txt')->nullable()->comment('Bescription');
            $table->longText('us_pork_description')->nullable()->comment('Bescription');
            $table->string('text_1')->nullable()->comment('Text 1');
            $table->string('text_2')->nullable()->comment('Text 2');
            $table->longText('description')->nullable()->comment('Description');
            $table->string('btn_txt')->nullable()->comment('Button Text');
            $table->longText('btn_link')->nullable()->comment('Button Text');
            
            $table->string('text_3')->nullable()->comment('Text 3');
            $table->string('text_4')->nullable()->comment('Text 3');          
            $table->longText('description_1')->nullable()->comment('Description 1'); 

            $table->string('img')->nullable()->comment('Button Text');
            $table->longText('description_2')->nullable()->comment('Description 1');
 
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
        Schema::dropIfExists('about_sections');
    }
};

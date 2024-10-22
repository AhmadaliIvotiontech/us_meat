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
        Schema::create('cuts_sections', function (Blueprint $table) {
            $table->id();
            $table->string('text_1')->nullable()->comment('Banner Text 1');
            $table->string('text_2')->nullable()->comment('Banner Text 2');
            $table->string('text_3')->nullable()->comment('Banner Text 3');
            $table->string('banner_img')->nullable()->comment('Banner Image');
            $table->string('banner_bg_img')->nullable()->comment('Banner Image');

            $table->string('text_4')->nullable()->comment('Text 4');            
            $table->string('text_5')->nullable()->comment('Text 5');            
            $table->longText('description')->nullable()->comment('Bescription'); 

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
        Schema::dropIfExists('cuts_sections');
    }
};

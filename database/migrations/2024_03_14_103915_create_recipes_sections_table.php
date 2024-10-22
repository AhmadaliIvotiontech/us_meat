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
        Schema::create('recipes_sections', function (Blueprint $table) {
            $table->id();
            $table->string('banner_img')->nullable()->comment('Banner Image');
            $table->longText('banner_description')->nullable()->comment('Banner Description');
            $table->string('us_beef_img')->nullable()->comment('Us Beef Image');            
            $table->string('us_pork_img')->nullable()->comment('Us Pork Image'); 
            $table->string('tooltip_img')->nullable()->comment('Button Text'); 
            $table->longText('tooltip_txt')->nullable()->comment('Button Text'); 

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
        Schema::dropIfExists('recipes_sections');
    }
};

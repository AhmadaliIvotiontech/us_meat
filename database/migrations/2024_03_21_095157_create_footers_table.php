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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->longText('us_meat_img')->nullable()->comment('US Meat Image');
            $table->longText('us_beef_img')->nullable()->comment('US Beef Image');
            $table->longText('us_pork_img')->nullable()->comment('US Pork Image');
            $table->longText('description')->nullable()->comment('Description');
            
            $table->string('mail')->nullable()->comment('Contact Email');
            $table->string('phone')->nullable()->comment('Contact Phone');          
            $table->longText('address')->nullable()->comment('Contact Address'); 

            $table->longText('facebook_link')->nullable()->comment('Facebook Link');
            $table->longText('twitter_link')->nullable()->comment('Twitter Link');
            $table->longText('instagram_link')->nullable()->comment('Instagram Link');
            $table->longText('linkedin_link')->nullable()->comment('Linkedin Link');
            $table->longText('pinterest_link')->nullable()->comment('Pinterest Link');
 
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
        Schema::dropIfExists('footers');
    }
};

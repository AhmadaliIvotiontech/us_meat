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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->longText('banner_img')->nullable()->comment('Banner Image');
            $table->longText('video_link')->nullable()->comment('Video Link');
            $table->longText('text')->nullable()->comment('Text');
            $table->longText('text_description')->nullable()->comment('Text Description');
            
            $table->string('text_1')->nullable()->comment('Text 1');
            $table->string('text_2')->nullable()->comment('Text 2');          
            $table->longText('description')->nullable()->comment('Description'); 

            $table->longText('img')->nullable()->comment('Image');
            $table->longText('participants')->nullable()->comment('Participants');
            $table->longText('participants_description')->nullable()->comment('Participants Description');
            $table->longText('form_description')->nullable()->comment('Form Description');
 
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
        Schema::dropIfExists('experiences');
    }
};

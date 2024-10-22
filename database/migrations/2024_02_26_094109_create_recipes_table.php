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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable()->comment('Type of Recipes');
            $table->string('category')->nullable()->comment('Category of Recipes');
            $table->string('sub_category')->nullable()->comment('Sub Category of Recipes');
            $table->string('text_1')->nullable()->comment('Text 1');
            $table->string('button_text')->nullable()->comment('Button Text'); 
            $table->longText('button_link')->nullable()->comment('Button Link'); 

            $table->string('preparation')->nullable()->comment('Preparation Time'); 
            $table->string('serves')->nullable()->comment('Serves People'); 

            $table->longText('img')->nullable()->comment('Recipes Image'); 
            $table->longText('documentation')->nullable()->comment('Documentation'); 
            $table->longText('youtube_link')->nullable()->comment('Link for Youtube'); 

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
        Schema::dropIfExists('recipes');
    }
};

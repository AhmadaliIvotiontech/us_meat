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
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->string('text_1')->nullable()->comment('Type of Recipes');
            $table->string('text_2')->nullable()->comment('Category of Recipes');
            $table->longText('description_1')->nullable()->comment('Sub Category of Recipes');
            $table->string('button_text')->nullable()->comment('Button Text'); 
            $table->longText('button_link')->nullable()->comment('Button Link'); 

            $table->string('text_3')->nullable()->comment('Category of Recipes');
            $table->longText('description_2')->nullable()->comment('Sub Category of Recipes');

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
        Schema::dropIfExists('home_sections');
    }
};

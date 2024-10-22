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
        Schema::create('meat_sliders', function (Blueprint $table) {
            // $table->id();
            // $table->string('slider_name')->nullable()->comment('Slider Text');
            // $table->string('button_text')->nullable()->comment('Slider Button Text'); 
            // $table->longText('button_link')->nullable()->comment('Slider Button Link'); 
            // $table->longText('slider_img')->nullable()->comment('Slider BG image'); 
            // $table->longText('trademark_img')->nullable()->comment('Slider Trademark image'); 
            // $table->integer('status')->default(1)->comment('Primary key of the status table');               
            // $table->integer('created_by')->nullable()->comment('Login id of user who creates the entry');
            // $table->integer('updated_by')->nullable()->comment('Login id of user who updates the entry');  
            // $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meat_slider');
    }
};

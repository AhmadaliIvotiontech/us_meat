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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('text_1')->nullable()->comment('Testimonial Text');
            $table->string('text_2')->nullable()->comment('Testimonial Text');
            $table->longText('description')->nullable()->comment('Testimonial Description');
            $table->string('button_text')->nullable()->comment('Testimonial Button Text'); 
            $table->longText('button_link')->nullable()->comment('Testimonial Button Link'); 
            $table->longText('img')->nullable()->comment('Testimonial image'); 
            $table->string('img_text_1')->nullable()->comment('Testimonial image text'); 
            $table->string('img_text_2')->nullable()->comment('Testimonial image text'); 
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
        Schema::dropIfExists('testimonials');
    }
};

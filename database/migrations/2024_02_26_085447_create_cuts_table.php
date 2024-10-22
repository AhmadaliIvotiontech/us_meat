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
        Schema::create('cuts', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable()->comment('Category of Cuts');
            $table->string('sub_category')->nullable()->comment('Sub Category of Cuts');
            $table->string('text_1')->nullable()->comment('Text 1');
            $table->string('text_2')->nullable()->comment('Text 2');
            $table->string('text_3')->nullable()->comment('Text 3');
            $table->string('weight')->nullable()->comment('Cuts Weight');
            $table->string('button_text')->nullable()->comment('Button Text'); 
            $table->longText('button_link')->nullable()->comment('Button Link'); 

            $table->longText('img')->nullable()->comment('Competitor Image'); 

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
        Schema::dropIfExists('cuts');
    }
};

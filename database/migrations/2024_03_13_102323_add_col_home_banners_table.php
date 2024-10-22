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
        Schema::table('home_banners', function (Blueprint $table) {
            $table->string('tooltip_img')->nullable()->comment('Banner Tooltip Image');
            $table->string('tooltip_txt')->nullable()->comment('Banner Tooltip text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

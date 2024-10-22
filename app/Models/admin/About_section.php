<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_section extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'banner_img',
        'video_link',
        'us_meat_img',
        'us_meat_tooltip_txt',
        'us_meat_description',
        'us_beef_img',
        'us_beef_tooltip_txt',
        'us_beef_description',
        'us_pork_img',
        'us_pork_tooltip_txt',
        'us_pork_description',
        'text_1',
        'text_2',
        'description',
        'btn_txt',
        'btn_link',
        'text_3',
        'text_4',
        'description_1',
        'img',
        'description_2',
        'chart_img',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

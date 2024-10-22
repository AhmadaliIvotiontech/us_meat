<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes_details_section extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'text_1',
        'text_2',
        'text_3',
        'banner_img',
        'banner_bg_img',
        'video_img',
        'video_link',
        'video_text_1',
        'video_text_2',
        'video_text_description',
        'ingredientes_text_1',
        'ingredientes_text_2',
        'ingredientes',
        'ingredientes_img',
        'preparation_text_1',
        'preparation_text_2',
        'preparation_description',
        'preparation_description_1',
        'preparation_description_2',
        'preparation_description_3',
        'preparation_img',
        'preparation_img_full',
        'btn_txt',
        'btn_link',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'recipe_id',
    ];
}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'text_1',
        'text_2',
        'text_3',
        'button_text',
        'button_link',
        'banner_bg_img',
        'banner_main_img',
        'banner_trademark_img',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'tooltip_img',
        'tooltip_txt',
    ];
}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuts_section extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'text_1',
        'text_2',
        'text_3',
        'banner_img',
        'banner_bg_img',
        'text_4',
        'text_5',
        'description',
        'btn_txt',
        'btn_link',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

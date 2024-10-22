<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'banner_img',
        'video_link',
        'text',
        'text_description',
        'text_1',
        'text_2',
        'description',
        'img',
        'participants',
        'participants_description',
        'form_description',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'tooltip_img',
        'tooltip_txt',
    ];
}

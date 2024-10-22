<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meat_slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'slider_name',
        'button_text',
        'button_link',
        'slider_img',
        'trademark_img',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'tooltip_img',
        'tooltip_txt',
    ];
}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'text_1',
        'text_2',
        'description',
        'button_text',
        'button_link',
        'img',
        'img_text_1',
        'img_text_2',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

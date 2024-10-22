<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'type',
        'category',
        'sub_category',
        'button_text',
        'button_link',
        'img',
        'text_1',
        'preparation',
        'serves',
        'documentation',
        'youtube_link',
        'check',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'recipe_id',
    ];
}

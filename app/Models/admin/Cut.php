<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cut extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category',
        'sub_category',
        'text_1',
        'text_2',
        'text_3',
        'text_4',
        'weight',
        'button_text',
        'button_link',
        'img',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_section extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'text_1',
        'text_2',
        'text_3',
        'button_text',
        'button_link',
        'description_1',
        'description_2',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

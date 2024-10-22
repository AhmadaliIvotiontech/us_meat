<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'text_1',
        'text_2',
        'text_3',
        'button_text',
        'button_link',
        'preparation',
        'serves',
        'img',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

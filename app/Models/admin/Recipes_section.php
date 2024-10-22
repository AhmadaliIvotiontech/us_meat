<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes_section extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'banner_img',
        'banner_description',
        'us_beef_img',
        'us_pork_img',
        'tooltip_img',
        'tooltip_txt',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

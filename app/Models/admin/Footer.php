<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'us_meat_img',
        'us_beef_img',
        'us_pork_img',
        'description',
        'mail',
        'phone',
        'address',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'linkedin_link',
        'pinterest_link',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'tooltip_img',
        'tooltip_txt',
    ];
}

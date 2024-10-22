<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Where_to_buy extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'logo_txt',
        'logo_img',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

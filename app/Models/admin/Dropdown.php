<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropdown extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'page_name',
        'dropdown_name',
        'dropdown_value',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

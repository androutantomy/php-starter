<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;
    protected $table = 'user_activity';

    protected $fillable = [
        'id_user',
        'deskripsi',
        'status',
        'menu_id',
        'delete_mark',
        'create_by',
        'delete_by',
    ];
}

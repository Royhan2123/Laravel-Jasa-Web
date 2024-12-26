<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExprienceUser extends Model
{
    use SoftDeletes;

    use SoftDeletes;

    public $table = 'exprience_user';
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'detail_user_id',
        'exprience',
        'updated_at',
        'created_at',
        'deleted_at',
    ];
}

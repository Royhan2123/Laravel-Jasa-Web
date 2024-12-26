<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThumbnailService extends Model
{
    use SoftDeletes;

    public $table = 'thumbnail_services';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'thubmnail',
        'services_id',
        'updated_at',
        'created_at',
        'deleted_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageService extends Model
{
    use SoftDeletes;
    public $table = 'advantage_services';
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'services_id',
        'updated_at',
        'created_at',
        'deleted_at',
    ];
}

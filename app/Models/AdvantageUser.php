<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageUser extends Model
{
    use SoftDeletes;

    public $table = 'advantage_user';
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

    public function service() {
        return $this->hasMany(Tagline::class, 'services_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    public $table = 'services';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];  

    protected $fillable = [
        'users_id',
        'title',
        'description',
        'delivery_time',
        'revision_limit',
        'price',
        'note',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function advantage_user() {
        return $this->hasMany(AdvantageUser::class, 'services_id');
    }

    public function advantage_service() {
        return $this->hasMany(AdvantageService::class, 'services_id');
    }

    public function thumbnail_service() {
        return $this->hasMany(ThumbnailService::class, 'services_id');
    }

    public function tagline() {
        return $this->hasMany(Tagline::class, 'services_id');
    }

    public function order() {
        return $this->hasMany(Order::class, 'services_id');
    }
}

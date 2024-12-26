<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public $table = 'order';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'buyer_id',
        'freelancer_id',
        'services_id',
        'file',
        'note',
        'order_status_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'expired',
    ];

    public function user_buyer(){
        return $this->belongsTo(User::class, 'buyer_id', 'id');
    }

    public function user_freelancer(){
        return $this->belongsTo(User::class, 'freelancer_id', 'id');
    }
}

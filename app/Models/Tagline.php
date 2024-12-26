<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
   use SoftDeletes;

   public $table = 'tagline';

   protected $dates = [
    'updated_at',
    'created_at',
    'deleted_at',
];

   protected $fillable = [
    'tagline',
    'services_id',
    'updated_at',
    'created_at',
    'deleted_at',
   ];

}
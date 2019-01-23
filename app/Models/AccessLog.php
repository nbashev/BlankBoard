<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AccessLog extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_name', 'user_ip', 'event',
    ];

    public function getCreatedAtAttribute($value)
    {
    	return Carbon::parse($value)->diffForHumans();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscriptions';
    protected $fillable = [
        'user_id' ,
        'name',
        'stripe_id,',
        'stripe_status',
        'stripe_price',
        'quantity',
        'trial_ends_at',
        'ends_at' 
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

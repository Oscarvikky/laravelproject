<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class No_Deposit extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'name',
        'amount',
        'acc_type',
        'deposit_count',
        'last_recieved',
        'subscription_expires'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'username',
        'amount',
        'acc_type',
        'transaction_id',
        'description',
        'status'
    ];
}

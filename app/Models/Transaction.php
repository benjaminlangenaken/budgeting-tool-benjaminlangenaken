<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'account_id',
        'date',
        'description',
        'category',
        'amount',
        'currency',
//        'is_expense'
    ];

    // Avoid n+1 problem in foreach loop by also fetching category/author for each Post
    protected $with = ['user', 'account'];

    // Add eloquent relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}

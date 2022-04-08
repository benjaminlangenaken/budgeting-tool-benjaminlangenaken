<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Create an array of all database columns which are NOT allowed to be mass assigned
    protected $guarded = ['id'];

    protected $dates = ['name_field'];

    // Avoid n+1 problem in foreach loop by also fetching category/author for each Post
    protected $with = ['user', 'category', 'account'];

    // Add eloquent relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}

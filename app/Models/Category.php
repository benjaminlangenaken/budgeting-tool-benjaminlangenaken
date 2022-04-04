<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Add eloquent relationship
    public function transactions()
    {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->hasMany(Transaction::class);
    }
}

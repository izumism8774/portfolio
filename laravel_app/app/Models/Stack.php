<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    protected $fillable = [
        'text',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}

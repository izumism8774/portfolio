<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'picture',
        'description',
        'category',
        'period',
        'github',
        'tags_id',
        'stacks_id',
    ];

    public function tags()
    {
        return $this->belongsTo(Tags::class);
    }

    public function stacks()
    {
        return $this->belongsTo(Stack::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    
    protected $guared = [];

    public function user()
    {
        return $this->belogsTo(User::class);
    }
}

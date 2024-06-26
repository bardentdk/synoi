<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategorie extends Model
{
    use HasFactory;

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}

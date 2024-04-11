<?php

namespace App\Models;

use App\Models\BlogCategorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    public function categorie() {
        return $this->belongsTo(BlogCategorie::class);
    }
}

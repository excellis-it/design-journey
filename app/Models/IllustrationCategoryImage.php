<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IllustrationCategoryImage extends Model
{
    use HasFactory;

    public function illustration_category()
    {
        return $this->belongsTo(IllustrationCategory::class);
    }
}

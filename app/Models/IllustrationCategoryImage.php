<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IllustrationCategoryImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'illustration_category_id',
    ];

    public function illustration_category()
    {
        return $this->belongsTo(IllustrationCategory::class);
    }
}

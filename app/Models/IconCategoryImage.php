<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconCategoryImage extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'icon_category_id',
    // ];

    public function icon_category()
    {
        return $this->belongsTo(IconCategory::class);
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}

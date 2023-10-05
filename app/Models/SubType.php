<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    use HasFactory;
    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
}
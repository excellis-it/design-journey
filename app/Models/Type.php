<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubType;

class Type extends Model
{
    use HasFactory;
    public function SubType()
    {
        return $this->hasMany(SubType::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubType;

class PresentationForm extends Model
{
    use HasFactory;

    public function Type()
    {
        return $this->belongsTo(Type::class);
    }

    public function SubType()
    {
        return $this->belongsTo(SubType::class);
    }
}

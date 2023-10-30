<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubType;
use App\Models\Type;
use App\Models\User;

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
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

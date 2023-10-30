<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    //plan relationship
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}

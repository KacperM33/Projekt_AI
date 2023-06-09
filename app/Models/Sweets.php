<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sweets extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function transactions()
    {
        return $this->belongsTo(Transactions::class);
    }
}

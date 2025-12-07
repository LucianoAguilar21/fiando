<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $fillable = [
        "fia_id",
        "type",
        "amount"
    ];

    public function fia()
    {
        return $this->belongsTo(Fia::class);
    }

    
}

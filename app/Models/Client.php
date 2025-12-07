<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;
    

    protected $fillable = [
        "user_id",
        "name",
        "phone",
        "address"
    ];

    public function fias()
    {
        return $this->hasMany(Fia::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

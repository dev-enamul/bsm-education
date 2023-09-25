<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'country',
        'short_description',
        'reason',
        'requir_document',
        'procedure',
        'fee',
        'image',
        'status',
    ];

    public function partners()
    {
        return $this->hasMany(Partner::class);
    }
}

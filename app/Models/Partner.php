<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = ['title','destination_id','name', 'image', 'description'];
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}

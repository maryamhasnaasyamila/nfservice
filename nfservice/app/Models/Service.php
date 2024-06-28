<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function contributor()
    {
        $this->belongsTo(Contributor::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}

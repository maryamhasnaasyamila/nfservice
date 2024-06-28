<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function services()
    {
        $this->hasMany(Service::class);
    }

    public function getAvatarAttribute()
    {
        return 'https://ui-avatars.com/api/?name=' . $this->nama . '&color=7F9CF5&background=EBF4FF';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

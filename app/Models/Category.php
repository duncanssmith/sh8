<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function texts()
    {
//        return $this->belongsToMany(Text::class);

        return $this->belongsToMany(Text::class)->withPivot('order');

    }

    public function works()
    {
//        return $this->belongsToMany(Work::class);
        return $this->belongsToMany(Work::class)->withPivot('order');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Always use eager loading for 'author ??? need to consider whether is is a good idea in every circumstance
    // If not, it needs to be in each route closure added into the Eloquent route call
//    protected $with = ['author'];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

}

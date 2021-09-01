<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['works', 'texts'];

    /**
     * @return BelongsToMany
     */
    public function texts()
    {
        return $this->belongsToMany(Text::class)->withPivot('order');
    }

    /**
     * @return BelongsToMany
     */
    public function works()
    {
        return $this->belongsToMany(Work::class)->withPivot('order');
    }

    /**
     * @return HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

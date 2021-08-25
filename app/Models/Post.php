<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Always use eager loading for 'author ??? need to consider whether is is a good idea in every circumstance
    // If not, it needs to be in each route closure added into the Eloquent route call
    protected $with = ['category', 'author'];

    /**
     * @return BelongsTo
     */
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * @return BelongsTo
     */
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @param $query
     * @param array $filters
     * @return mixed
     */
    public function scopeFilter($query, array $filters) // Post::newQuery()->filter()
    {
        if ($filters['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('excerpt', 'like', '%' . $filters['search'] . '%')
                ->orWhere('body', 'like', '%' . $filters['search'] . '%');

//            $query
//                ->when($filters['category'] ?? false, fn($query, $category) => $query
//                    ->whereHas('category', fn($query) => $query
//                        ->where('slug', $category)
//                )
//            );
        }

        return $query;
    }

}

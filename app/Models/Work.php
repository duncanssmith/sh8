<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Work extends Model
{
    use HasFactory;

    protected $guarded = [];

//    protected $with = ['category'];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot('order')->withTimestamps();
    }

    /**
     * @param $query
     * @param array $filters
     * @return mixed
     */
    public function scopeFilter($query, array $filters) // Work::newQuery()->filter()
{
    if ($filters['search'] ?? false) {
        $query
            ->where('title', 'like', '%' . $filters['search'] . '%')
            ->orWhere('media', 'like', '%' . $filters['search'] . '%');

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

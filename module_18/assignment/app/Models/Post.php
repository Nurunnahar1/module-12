<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable=['title'];
    public function categorirs():BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }



    //====== 6 ============

    public static function getTotalPostsByCategory($categoryId)
{
    return self::where('category_id', $categoryId)->count();
}

    //====== 8 ============

    public static function getAllSoftDeletedPosts()
    {
        return self::withTrashed()->get();
    }



}

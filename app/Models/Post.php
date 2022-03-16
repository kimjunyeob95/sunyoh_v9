<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Post
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @mixin \Eloquent
 */
class Post extends Model
{
    use HasFactory;
    protected $table = 'tbl_posts';
    protected $fillable = ['user_id','ts_type', 'ts_title', 'ts_title_seo', 'ts_subtitle', 'ts_desc', 'ts_order', 'ts_is_show', 'ts_nav_is_show'];

    // 생성, 업데이트 추가 활성화 
    public $timestamps = true;

    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class,'post_id','ts_seq');
    }
    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class,'category_post','post_id','category_id','ts_seq');
    }
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class,'user_id','id');
    }

    
}

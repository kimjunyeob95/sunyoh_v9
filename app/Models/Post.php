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

    protected $fillable = ['ts_seq', 'ts_type', 'ts_title', 'ts_title_seo', 'ts_subtitle', 'ts_desc', 'ts_order', 'ts_is_show', 'ts_nav_is_show'];

    // 생성, 업데이트 추가 활성화 
    public $timestamps = true;
}

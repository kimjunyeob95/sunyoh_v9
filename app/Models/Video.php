<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Video
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video query()
 * @mixin \Eloquent
 */
class Video extends Model
{
    use HasFactory;
    protected $table = 'tbl_videos';

    protected $fillable = ['tv_seq', 'tv_type', 'tv_url', 'tv_name', 'ts_seq'];

    // 생성, 업데이트 추가 활성화 
    public $timestamps = true;
}

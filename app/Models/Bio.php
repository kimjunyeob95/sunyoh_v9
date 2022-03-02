<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bio
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Bio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bio query()
 * @mixin \Eloquent
 */
class Bio extends Model
{
    use HasFactory;
    protected $table = 'tbl_bio';

    protected $fillable = ['tb_seq', 'tb_title', 'tb_img', 'tb_desc', 'tb_is_show'];

    // 생성, 업데이트 추가 활성화 
    public $timestamps = true;
}

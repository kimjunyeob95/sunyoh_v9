<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Main_banner
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Main_banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Main_banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Main_banner query()
 * @mixin \Eloquent
 */
class Main_banner extends Model
{
    use HasFactory;
    protected $table = 'tbl_main_banner';

    protected $fillable = ['tm_seq', 'tm_order', 'tm_img', 'tm_img_m', 'tm_is_show', 'tm_is_del'];

    // 생성, 업데이트 추가 활성화 
    public $timestamps = true;
}

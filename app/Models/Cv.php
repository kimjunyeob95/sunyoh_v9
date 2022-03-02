<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cv
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Cv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv query()
 * @mixin \Eloquent
 */
class Cv extends Model
{
    use HasFactory;
    protected $table = 'tbl_cv';

    protected $fillable = ['tcv_seq', 'tcv_title', 'tcv_order', 'tcv_is_show'];

    // 생성, 업데이트 추가 활성화 
    public $timestamps = true;
}

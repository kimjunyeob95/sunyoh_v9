<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cv_list
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Cv_list newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv_list newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv_list query()
 * @mixin \Eloquent
 */
class Cv_list extends Model
{
    use HasFactory;
    protected $table = 'tbl_cv_list';

    protected $fillable = ['tcvl_seq', 'tcvl_year', 'tcvl_desc', 'tcvl_order', 'tcvl_is_show', 'tcv_seq'];

    // 생성, 업데이트 추가 활성화 
    public $timestamps = true;
}

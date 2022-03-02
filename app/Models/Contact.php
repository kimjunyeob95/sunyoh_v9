<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contact
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @mixin \Eloquent
 */
class Contact extends Model
{
    use HasFactory;
    protected $table = 'tbl_contact';

    protected $fillable = ['ttc_seqb_seq', 'tc_name', 'tc_email', 'tc_message'];

    // 생성, 업데이트 추가 활성화 
    public $timestamps = true;
}

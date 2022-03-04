
{{-- @extends('layout.app')


@section('title', 'Page Title') --}}


<?php
    function get_admin_auth_val_check($target, $val) {
        
        if($target & $val){
            echo '접근 허락';
        }
    } 
    get_admin_auth_val_check(48,1<<4);
    
?>

@forelse ($bios as $item)
<div style="margin-bottom: 15px">
    <p seq={{ $item->tb_seq }}>제목 : {{ $item->tb_title }} <button id="modify" onclick="fn_modify({{ $item->tb_seq }})">수정</button> <button id="remove" onclick="fn_delete({{ $item->tb_seq }})">삭제</button></p>
</div>
@empty
@endforelse
<a href="{{ url('/') }}" class="underline text-gray-900 dark:text-white">메인페이지 이동</a>
<script>
    const fn_modify = (tb_seq) =>{
        location.href=`/bio/modify/${tb_seq}`;
    }

    const fn_delete = (tb_seq) =>{
        if(confirm('정말 삭제하시겠습니까?')){
            location.href=`/bio/delete/${tb_seq}`;
        }
        
    }
</script>



 

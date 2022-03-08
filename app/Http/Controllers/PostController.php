<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;	
use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Request\PostRequest;

class PostController extends Controller
{
    private $where_query = [];
    private $result = ['msg'=>'잘못된 접근입니다.'];

    public function __construct(Request $request)
    {
        $ts_title = $request->input('ts_title');
        $ts_title_seo = $request->input('ts_title_seo');
        $ts_subtitle = $request->input('ts_subtitle');
        $ts_desc = $request->input('ts_desc');

        if($ts_title) $this->where_query['ts_title'] = $ts_title;
        if($ts_title_seo) $this->where_query['ts_title_seo'] = $ts_title_seo;
        if($ts_subtitle) $this->where_query['ts_subtitle'] = $ts_subtitle;
        if($ts_desc) $this->where_query['ts_desc'] = $ts_desc;
    }
    public function index()
    {
        $posts = Post::orderby('ts_seq','desc')
                    ->with(['comments','categories'])
                    ->paginate(10);
        return response()->json($posts);
    }

    public function create(Request $request)
    {
        $params = $request->only(['ts_title','ts_title_seo','ts_subtitle','ts_desc']);
        $params['user_id'] = $request->user()->id;
        $post = Post::create($params);
        if($post){
            $ids = $request->input('category_ids');
            $post['ts_seq']=$post->id;
            $post->categories()->sync($ids,$post['ts_seq']);

            $this->result['msg'] = '추가 되었습니다.';
            $this->result['data'] = $post;
            return response()->json($this->result);
        }
        if(!$post){
            return response()->json($this->result,404);
        }
    }

    public function read($id)
    {
        $post = Post::where('ts_seq',$id)->with(['comments','categories'])->first();
        return response()->json($post);
    }

    public function update($id)
    {

        $post = Post::where('ts_seq',$id)->update($this->where_query);

        if(!$post){
            $this->result['msg'] = '조회할 데이터가 없습니다.';
            return response()->json($this->result,404);
        }

        if($post){
            $ids = $request->input('category_ids');
            $post['ts_seq']=$post->id;
            $post->categories()->sync($ids,$post['ts_seq']);
            $this->result['msg'] = '수정되었습니다.';
            return response()->json($this->result);
        }
    }

    public function delete($id)
    {
        $post = Post::where('ts_seq',$id)->delete();
        if(!$post){
            return response()->json($this->result,404);
        }
        if($post){
            return response()->json(['message'=>"삭제완료"]);
        }
    }
}

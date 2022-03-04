<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request, $postId)
    {
        $post = Post::firstWhere('ts_seq',$postId);
        if(!$post) return abort(404);
    

        $author = $request->input('author');
        $content = $request->input('content');

        $comment = new Comment();
        $comment->post_id = $post->ts_seq;
        $comment->content = $content;
        $comment->author = $author;
        $comment->save();

        return response()->json($comment);
    }

    public function delete($postId,$id)
    {
        $result['msg']='삭제되었습니다.';
        $comment = Comment::where('post_id',$postId)->firstWhere('id',$id);
        if(!$comment) abort(404);

        $comment->delete();
        return response()->json($result);
    }
}

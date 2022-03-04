<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderby('created_at','desc')->get();
        return response()->json($posts);
    }

    public function create(Request $request)
    {
        $ts_title = $request->input('ts_title');
        $ts_title_seo = $request->input('ts_title_seo');
        $ts_subtitle = $request->input('ts_subtitle');
        $ts_desc = $request->input('ts_desc');

        $post = new Post();
        $post->ts_title = $ts_title;
        $post->ts_title_seo = $ts_title_seo;
        $post->ts_subtitle = $ts_subtitle;
        $post->ts_desc = $ts_desc;
        $post->save();

        return response()->json($post);

    }
}

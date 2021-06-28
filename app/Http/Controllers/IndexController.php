<?php


namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(Request $request) {
        if($request->has('q')) {
            $q=$request->q;
            $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(2);
        }else{
            $posts=Post::orderBy('id','desc')->paginate(2);
        }
        return view('home',['posts'=>$posts]);
    }
    // Post Detail
    function detail(Request $request,$slug,$postId){
        // Update post count
        Post::find($postId)->increment('views');
        $detail=Post::find($postId);
        return view('detail',['detail'=>$detail]);
    }
}

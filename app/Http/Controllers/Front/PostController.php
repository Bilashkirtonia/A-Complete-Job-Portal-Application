<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function details($id){
        $data['posts'] = Post::where('id', $id)->first();

        $data['posts']->total_view = $data['posts']->total_view + 1;
        $data['posts']->save();
        return view('admin.post.post_details', $data);

    } 

    public function index(){
        $data['all_posts'] = Post::paginate(3);
        return view('blog.blog',$data);
    }
}

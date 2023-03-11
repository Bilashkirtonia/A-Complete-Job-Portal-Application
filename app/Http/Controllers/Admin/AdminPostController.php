<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Post;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    public function index(){
        $data['posts'] = Post::all();
        return view('admin.post.post', $data);
    }

    public function create(){
        return view('admin.post.post_create');
    }

    public function add(Request $request){
        $request->validate([
            'heading' => 'required',
            'slug' => 'required|alpha_dash|unique:posts',
            'short_description' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $data = new Post();

        $ext = $request->file('photo')->extension();
        $final_name = 'post_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);

        $data->photo = $final_name;
        $data->heading = $request->heading;
        $data->slug = $request->slug;
        $data->short_description = $request->short_description;
        $data->description = $request->description;
        $data->total_view = 0;
        $data->title = $request->title;
        $data->meta_description = $request->meta_description;
        $data->save();

        return redirect()->route('admin_post')->with('success', 'Data is saved successfully.');
    }

    public function edit($id){
        $data['posts'] = Post::where('id', $id)->first();
        return view('admin.post.post_edit', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'heading' => 'required',
            'slug' => ['required','alpha_dash',Rule::unique('posts')->ignore($id)],
            'short_description' => 'required',
            'description' => 'required',
            'photo' => 'image|mimes:jpg,jpeg,png,gif'
        ]);

        $data = Post::where('id', $id)->first();

        if($request->hasFile('photo')){
            @unlink(public_path('uploads/'.$data->photo));
            $ext = $request->file('photo')->extension();
            $final_name = 'post_'.time().'.'.$ext;
            $request->file('photo')->move(public_path('uploads/'),$final_name);
            $data->photo = $final_name;
        }

        $data->heading = $request->heading;
        $data->slug = $request->slug;
        $data->short_description = $request->short_description;
        $data->description = $request->description;
        // $data->total_view = 0;
        // $data->title = $request->title;
        // $data->meta_description = $request->meta_description;
        $data->save();

        return redirect()->route('admin_post')->with('success', 'Data is saved successfully.');
        
    }

    public function delete($id){
        $data = Post::where('id', $id)->first();
        @unlink(public_path('uploads/'.$data->photo));
        $data->delete();
        return redirect()->route('admin_post')->with('success', 'Data is deleted successfully.');
    }

    
}

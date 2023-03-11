@extends('admin.app')

@section('Heading','Edit post')

@section('button')
    <div class="float-end">
        <a href="{{ route('admin_post') }}" class="btn btn-info"> View all</a>
    </div>
@endsection
@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_post_update',$posts->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Existing Photo</label>
                            <div>
                                <img src="{{ asset('uploads/'.$posts->photo) }}" alt="" class="w_150">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Photo</label>
                            <div>
                                <input type="file" name="photo">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Heading *</label>
                            <input type="text" class="form-control" name="heading" value="{{ $posts->heading }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Slug *</label>
                            <input type="text" class="form-control" name="slug" value="{{ $posts->slug }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Short Description *</label>
                            <textarea name="short_description" class="form-control h_100" cols="30" rows="10">{{ $posts->short_description }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description *</label>
                            <textarea name="description" class="form-control h_100 editor" cols="30" rows="10">{{ $posts->description }}</textarea>
                        </div>

                        {{-- <h4 class="seo_section">SEO Section</h4>
                        <div class="form-group mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $posts->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" class="form-control h_100" cols="30" rows="10">{{ $posts->meta_description }}</textarea>
                        </div>--}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
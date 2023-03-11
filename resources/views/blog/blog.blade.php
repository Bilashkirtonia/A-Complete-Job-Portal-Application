@extends("front.layout.app")

@section("main_contant")
<div
class="page-top"
style="background-image: url({{ asset('front/uploads/banner.jpg') }})"
>
<div class="bg"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Blog</h2>
        </div>
    </div>
</div>
</div>

<div class="blog">
<div class="container">
    <div class="row">
        @foreach ($all_posts as $post)
        <div class="col-lg-4 col-md-6">
            <div class="item">
                <div class="photo">
                    <img src="{{ asset('uploads/'.$post->photo) }}" alt="" />
                </div>
                <div class="text">
                    <h2>
                        <a href="post.html"
                            >{{ $post->heading }}</a
                        >
                    </h2>
                    <div class="short-des">
                        <p>
                            {{ Str::limit($post->short_description, 100) }}
                        </p>
                    </div>
                    <div class="button">
                        <a href="{{ route('admin_post_details',$post->id) }}" class="btn btn-primary"
                            >Read More</a
                        >
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $all_posts->links() }}
    </div>
</div>
</div>


@endsection
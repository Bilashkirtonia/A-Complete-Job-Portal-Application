@extends("front.layout.app")

@section("main_contant")
<div class="page-top" style="background-image: url({{ asset('uploads/'.$posts->photo) }})"
>
<div class="bg"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $posts->heading }}</h2>
        </div>
    </div>
</div>
</div>

<script
type="text/javascript"
src="https://platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"
async="async"
></script>

<div class="page-content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12">
            <div class="featured-photo">
                <img src="{{ asset('uploads/'.$posts->photo) }}" alt="" />
            </div>
            <div class="sub">
                <div class="item">
                    <b><i class="fa fa-clock-o"></i></b>
                    {{ $posts->created_at }}
                </div>
                <div class="item">
                    <b><i class="fa fa-eye"></i></b>
                    {{ $posts->total_view }}
                </div>
            </div>
            <div class="main-text">
                {{ $posts->description }}
            </div>
        </div>
    </div>
</div>
</div>


@endsection
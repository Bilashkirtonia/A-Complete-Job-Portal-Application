@extends("front.layout.app")

@section("seo_title") {{ $page_privacy_data->title }} @endsection
@section("seo_description") {{ $page_privacy_data->meta_description }} @endsection


@section("main_contant")

<div
class="page-top"
style="background-image: url({{ asset('front/uploads/banner.jpg') }})"
>
<div class="bg"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $page_privacy_data->heading }}</h2>
        </div>
    </div>
</div>
</div>

<div class="page-content">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>{{ $page_privacy_data->content }}</p>
        </div>
    </div>
</div>
</div>

@endsection
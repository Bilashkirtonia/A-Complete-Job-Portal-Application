@extends("front.layout.app")

@section("seo_title") {{ $page_contact_data->title }} @endsection
@section("seo_description") {{ $page_contact_data->meta_description }} @endsection


@section("main_contant")

<div class="page-top" style="background-image: url('uploads/banner.jpg')"
>
<div class="bg"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $page_contact_data->heading }}</h2>
        </div>
    </div>
</div>
</div>

<div class="page-content">
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="contact-form">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label"
                            >Name</label
                        >
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"
                            >Email Address</label
                        >
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"
                            >Message</label
                        >
                        <textarea
                            class="form-control"
                            rows="3"
                        ></textarea>
                    </div>
                    <div class="mb-3">
                        <button
                            type="submit"
                            class="btn btn-primary bg-website"
                        >
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="map">
                <iframe
                    src="{!! $page_contact_data->map_code !!}"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                ></iframe>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
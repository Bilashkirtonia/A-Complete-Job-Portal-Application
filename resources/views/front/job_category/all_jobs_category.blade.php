@extends("front.layout.app")

@section("main_contant")

        <div class="page-top" style="background-image: url({{ asset('front/uploads/banner.jpg') }})">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Job Categories</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="job-category">
            <div class="container">
                <div class="row">
                    @foreach ($all_categories as $category)
                        <div class="col-md-4">
                            <div class="item">
                                <div class="icon">
                                    <i class="{{ $category->icons }}"></i>
                                </div>
                                <h3>{{ $category->category }}</h3>
                                <p>(0 Open Position)</p>
                                <a href=""></a>
                            </div>
                        </div>
                     @endforeach                  
                </div>
            </div>
        </div>


@endsection
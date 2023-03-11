@extends("front.layout.app")

@section("seo_title")  @endsection
@section("seo_description")  @endsection


@section("main_contant")

<div class="page-top" style="background-image: url({{ asset('front/uploads/banner.jpg') }})">
<div class="bg"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Pricing</h2>
        </div>
    </div>
</div>
</div>

<div class="page-content pricing">
<div class="container">
    <div class="row pricing">
        @foreach ($page_pricing_data as $pricing)
        <div class="col-lg-4 mb_30">
            <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                    <h2 class="card-title">{{ $pricing->package_name}}</h2>
                    <h3 class="card-price">${{ $pricing->package_price }}</h3>
                    <h4 class="card-day">({{ $pricing->package_days }} Days)</h4>
                    <hr />
                    <ul class="fa-ul">
                        <li>
                            @php
                                if ($pricing->total_allowed_jobs == -1){
                                    $text = "Unlimited";
                                    $icons = "fas fa-check";
                                }
                                else if($pricing->total_allowed_jobs == 0){
                                    $text = "No";
                                    $icons = "fas fa-times";
                                }else{
                                   $text = $pricing->total_allowed_jobs;
                                   $icons = "fas fa-check"; 
                                }
                            @endphp

                            <span class="fa-li"><i class="{{ $icons }}"></i></span>
                            {{ $text }} Job posts allowed


                        </li>
                        <li>
                            <li>
                                @php
                                    if ($pricing->total_allowed_featured_jobs == -1){
                                        $text = "Unlimited";
                                        $icons = "fas fa-check";
                                    }
                                    else if($pricing->total_allowed_featured_jobs == 0){
                                        $text = "No";
                                        $icons = "fas fa-times";
                                    }else{
                                       $text = $pricing->total_allowed_featured_jobs;
                                       $icons = "fas fa-check"; 
                                    }
                                @endphp
    
                                <span class="fa-li"><i class="{{ $icons }}"></i></span>
                                {{ $text }} Featured Job
    
    
                            </li>

                            
                        </li>
                        <li>
                            @php
                                if ($pricing->total_allowed_photos == -1){
                                    $text = "Unlimited";
                                    $icons = "fas fa-check";
                                }
                                else if($pricing->total_allowed_photos == 0){
                                    $text = "No";
                                    $icons = "fas fa-times";
                                }else{
                                   $text = $pricing->total_allowed_photos;
                                   $icons = "fas fa-check"; 
                                }
                            @endphp

                            <span class="fa-li"><i class="{{ $icons }}"></i></span>
                            {{ $text }} Company Photos


                        </li> 

                        <li>
                            @php
                                if ($pricing->total_allowed_photos == -1){
                                    $text = "Unlimited";
                                    $icons = "fas fa-check";
                                }
                                else if($pricing->total_allowed_photos == 0){
                                    $text = "No";
                                    $icons = "fas fa-times";
                                }else{
                                   $text = $pricing->total_allowed_photos;
                                   $icons = "fas fa-check"; 
                                }
                            @endphp

                            <span class="fa-li"><i class="{{ $icons }}"></i></span>
                            {{ $text }} Company Videos


                        </li> 
                    </ul>
                    <div class="buy">
                        <a href="" class="btn btn-primary">
                            Choose Plan
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>

@endsection
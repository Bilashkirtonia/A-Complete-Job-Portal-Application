


@extends("front.layout.app")

@section("seo_title")  @endsection
@section("seo_description")  @endsection


@section("main_contant")

<div class="page-top" style="background-image: url({{ asset('front/uploads/banner.jpg') }})">
<div class="bg"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Dashboard</h2>
        </div>
    </div>
</div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            @include('company.c_header')

            <div class="col-lg-9 col-md-12">
                <h4>Current Plan</h4>
                <div class="row box-items mb-4">
                    <div class="col-md-4">
                        <div class="box1">
                            @if($current_active == null)
                            <span>No plan is available</span>
                            @else
                            <h4>${{ $current_active->paid_amount }}</h4>
                            <p>{{ $current_active->rPackage->package_name }}</p>
                            @endif
                            
                        </div>
                    </div>
                </div>

                <h4>Choose the package and make Payment</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <form action="{{ route('company_paypal') }}" method="post">
                        @csrf
                            <tr>
                                <td>
                                    <select name="package_id" id="" class="form-control select2">
                                        @foreach($packages as $package)
                                        <option value="{{ $package->id }}">{{ $package->package_name }} (${{ $package->package_price }})</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary"
                                        >Pay with PayPal</button>
                                </td>
                            </tr>
                        </form>
                            <tr>
                                <td>
                                    <select name="package_id" id="" class="form-control select2">
                                        @foreach($packages as $package)
                                        <option value="{{ $package->id }}">{{ $package->package_name }} (${{ $package->package_price }})</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary"
                                        >Pay with Card</a
                                    >
                                </td>
                            </tr>
                       
                    </table>
                </div>
            </div>

            
        </div>
    </div>
</div>

@endsection








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
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Order No</th>
                                {{-- <th>Package Name</th> --}}
                                <th>Price</th>
                                <th>Order Date</th>
                                <th>Expire Date</th>
                                <th>Payment Method</th>
                            </tr>
                            @foreach($orders as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->order_no }}</td>
                                
                                <td>{{ $item->paid_amount }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->expire_date }}</td>
                                <td>{{ $item->payment_method }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            
        </div>
    </div>
</div>

@endsection





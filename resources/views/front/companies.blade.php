@extends("front.layout.app")

@section("main_contant")

<div
class="page-top"
style="background-image: url({{ asset('front/uploads/banner.jpg')}})"
>
<div class="bg"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Company Listing</h2>
        </div>
    </div>
</div>
</div>

<div class="job-result">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <div class="job-filter">
                <div class="widget">
                    <h2>Company Name</h2>
                    <input
                        type="text"
                        name=""
                        class="form-control"
                        placeholder="Search Company Name ..."
                    />
                    <div class="clearfix"></div>
                </div>

                <div class="widget">
                    <h2>Company Location</h2>
                    <select name="" class="form-control select2">
                        <option value="">Australia</option>
                        <option value="">Bangladesh</option>
                        <option value="">Canada</option>
                        <option value="">China</option>
                        <option value="">India</option>
                        <option value="">United Kingdom</option>
                        <option value="">United States</option>
                    </select>
                    <div class="clearfix"></div>
                </div>

                <div class="widget">
                    <h2>Company Industry</h2>
                    <select name="" class="form-control select2">
                        <option value="">Accounting Firm</option>
                        <option value="">IT Firm</option>
                        <option value="">Law Firm</option>
                        <option value="">
                            Real Estate Company
                        </option>
                        <option value="">Software Company</option>
                    </select>
                    <div class="clearfix"></div>
                </div>

                <div class="widget">
                    <h2>Company Size</h2>
                    <select name="" class="form-control select2">
                        <option value="">2-5 Persons</option>
                        <option value="">5-10 Persons</option>
                        <option value="">10-20 Persons</option>
                        <option value="">20-50 Persons</option>
                        <option value="">50-100 Persons</option>
                        <option value="">100+ Persons</option>
                    </select>
                    <div class="clearfix"></div>
                </div>

                <div class="widget">
                    <h2>Founded On</h2>
                    <select name="" class="form-control select2">
                        <option value="">2018</option>
                        <option value="">2019</option>
                        <option value="">2020</option>
                        <option value="">2021</option>
                        <option value="">2022</option>
                    </select>
                    <div class="clearfix"></div>
                </div>

                <div class="filter-button">
                    <a href="" class="btn btn-sm"
                        ><i class="fas fa-search"></i> Filter</a
                    >
                </div>

                <div class="advertisement">
                    <a href=""
                        ><img src="{{ asset('front/uploads/ad-2.png')}}" alt=""
                    /></a>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="job">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-result-header">
                                <i class="fas fa-search"></i> Search
                                Result for Company Listing
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div
                                class="item d-flex justify-content-start"
                            >
                                <div class="logo">
                                    <img
                                        src="{{ asset('front/uploads/logo1.pn')}}g"
                                        alt=""
                                    />
                                </div>
                                <div class="text">
                                    <h3>
                                        <a href="company.html"
                                            >Berclays Firm
                                            Solution</a
                                        >
                                    </h3>
                                    <div
                                        class="detail-1 d-flex justify-content-start"
                                    >
                                        <div class="category">
                                            Law Firm
                                        </div>
                                        <div class="location">
                                            Canada
                                        </div>
                                    </div>
                                    <div
                                        class="detail-2 d-flex justify-content-start"
                                    >
                                        This is a nice and awesome
                                        law firm in this area. You
                                        will get the employers very
                                        helpful to the workers. You
                                        are welcome to do job here
                                        and you will enjoy.
                                    </div>
                                    <div class="open-position">
                                        <span
                                            class="badge bg-primary"
                                            >5 Open Positions</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div
                                class="item d-flex justify-content-start"
                            >
                                <div class="logo">
                                    <img
                                        src="{{ asset('front/uploads/logo2.pn')}}g"
                                        alt=""
                                    />
                                </div>
                                <div class="text">
                                    <h3>
                                        <a href="company.html"
                                            >Simplified IT
                                            Solution</a
                                        >
                                    </h3>
                                    <div
                                        class="detail-1 d-flex justify-content-start"
                                    >
                                        <div class="category">
                                            Accounting Firm
                                        </div>
                                        <div class="location">
                                            China
                                        </div>
                                    </div>
                                    <div
                                        class="detail-2 d-flex justify-content-start"
                                    >
                                        This is a nice and awesome
                                        law firm in this area. You
                                        will get the employers very
                                        helpful to the workers. You
                                        are welcome to do job here
                                        and you will enjoy.
                                    </div>
                                    <div class="open-position">
                                        <span
                                            class="badge bg-primary"
                                            >2 Open Positions</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div
                                class="item d-flex justify-content-start"
                            >
                                <div class="logo">
                                    <img
                                        src="{{ asset('front/uploads/logo3.pn')}}g"
                                        alt=""
                                    />
                                </div>
                                <div class="text">
                                    <h3>
                                        <a href="company.html"
                                            >Laravel Genius Lab</a
                                        >
                                    </h3>
                                    <div
                                        class="detail-1 d-flex justify-content-start"
                                    >
                                        <div class="category">
                                            Real Estate Company
                                        </div>
                                        <div class="location">
                                            United States
                                        </div>
                                    </div>
                                    <div
                                        class="detail-2 d-flex justify-content-start"
                                    >
                                        This is a nice and awesome
                                        law firm in this area. You
                                        will get the employers very
                                        helpful to the workers. You
                                        are welcome to do job here
                                        and you will enjoy.
                                    </div>
                                    <div class="open-position">
                                        <span
                                            class="badge bg-primary"
                                            >0 Open Position</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div
                                class="item d-flex justify-content-start"
                            >
                                <div class="logo">
                                    <img
                                        src="{{ asset('front/uploads/logo4.pn')}}g"
                                        alt=""
                                    />
                                </div>
                                <div class="text">
                                    <h3>
                                        <a href="company.html"
                                            >Senior Hiring
                                            Manager</a
                                        >
                                    </h3>
                                    <div
                                        class="detail-1 d-flex justify-content-start"
                                    >
                                        <div class="category">
                                            Software Company
                                        </div>
                                        <div class="location">
                                            United Kingdom
                                        </div>
                                    </div>
                                    <div
                                        class="detail-2 d-flex justify-content-start"
                                    >
                                        This is a nice and awesome
                                        law firm in this area. You
                                        will get the employers very
                                        helpful to the workers. You
                                        are welcome to do job here
                                        and you will enjoy.
                                    </div>
                                    <div class="open-position">
                                        <span
                                            class="badge bg-primary"
                                            >15 Open Positions</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection
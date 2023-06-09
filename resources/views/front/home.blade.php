@extends("front.layout.app")

@section("main_contant")

@section("seo_title") {{ $search_info->heading }} @endsection

<div class="slider" style="background-image: url({{ asset('uploads/'.$search_info->image) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item">
                    <div class="text">
                        <h2>{{ $search_info->heading }}</h2>
                        <p>
                            {{ $search_info->text }}
                        </p>
                    </div>
                    <div class="search-section">
                        <form action="jobs.html" method="post">
                            <div class="inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                name=""
                                                class="form-control"
                                                placeholder="{{ $search_info->job_title }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select
                                                name=""
                                                class="form-select select2"
                                            >
                                                <option value="">
                                                    {{ $search_info->job_location }}
                                                </option>
                                                <option value="">
                                                    Australia
                                                </option>
                                                <option value="">
                                                    Bangladesh
                                                </option>
                                                <option value="">
                                                    Canada
                                                </option>
                                                <option value="">
                                                    China
                                                </option>
                                                <option value="">
                                                    India
                                                </option>
                                                <option value="">
                                                    United Kingdom
                                                </option>
                                                <option value="">
                                                    United States
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select
                                                name=""
                                                class="form-select select2"
                                            >
                                                <option value="">
                                                    {{ $search_info->job_category }}
                                                </option>
                                                @foreach ($all_categories as $category)
                                                    <option value="{{ $category->id }}">
                                                       {{ $category->category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            <i
                                                class="fas fa-search"
                                            ></i>
                                            {{ $search_info->job_search }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="job-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>{{ $search_info->job_category_heading }}</h2>
                    <p>
                        {{ $search_info->job_category_subheading }}
                    </p>
                </div>
            </div>
        </div>
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

        <div class="row">
            <div class="col-md-12">
                <div class="all">
                    <a href="{{ route('all_jobs_category') }}" class="btn btn-primary"
                        >See All Categories</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>






<div class="why-choose" style="background-image: url({{ asset('uploads/'.$search_info->why_choose_background) }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Why Choose Us</h2>
                            <p>
                                Our Methods to help you build your career in
                                future
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($why_choose_items as $item)
                        <div class="col-md-4">
                            <div class="inner">
                                <div class="icon">
                                    <i class="{{ $item->icon }}"></i>
                                </div>
                                <div class="text">
                                    <h2>{{ $item->heading }}</h2>
                                    <p>
                                        {{ $item->text }}
                                    </p>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                    
                </div>
            </div>
        </div>




<div class="job">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>{{ $search_info->featured_jobs_heading }}</h2>
                    <p>{{ $search_info->featured_jobs_subheading }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('front/uploads/logo1.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >Software Engineer, Google</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Web Development</div>
                            <div class="location">United States</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">3 days ago</div>
                            <div class="budget">$300-$600</div>
                            <div class="expired">Expired</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Full Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark active"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('front/uploads/logo2.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html">Web Designer, Amplify</a>
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Web Development</div>
                            <div class="location">United States</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">1 day ago</div>
                            <div class="budget">$1000</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Part Time</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('front/uploads/logo3.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >Laravel Developer, Gimpo</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Web Development</div>
                            <div class="location">Canada</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">2 days ago</div>
                            <div class="budget">$1000-$3000</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Full Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('front/uploads/logo4.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >PHP Developer, Kite Solution</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Web Development</div>
                            <div class="location">Australia</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">7 hours ago</div>
                            <div class="budget">$1800</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Full Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('front/uploads/logo5.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >Junior Accountant, ABC Media</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Marketing</div>
                            <div class="location">Canada</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">2 hours ago</div>
                            <div class="budget">$400</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Part Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('front/uploads/logo6.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >Sales Manager, Tingshu Limited</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Marketing</div>
                            <div class="location">Canada</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">9 hours ago</div>
                            <div class="budget">$600-$800</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Full Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="all">
                    <a href="{{ route('all_jobs') }}" class="btn btn-primary"
                        >See All Jobs</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>



<div class="blog">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
                <h2>{{ $search_info->blog_heading }}</h2>
                <p>
                    {{ $search_info->blog_subheading }}
                </p>
            </div>
        </div>
    </div>
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
        

    </div>
</div>
</div>






@endsection
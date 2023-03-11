<div class="col-lg-3 col-md-12">
    <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a href="company-dashboard.html"
                    >Dashboard</a
                >
            </li>
            <li class="list-group-item {{ Request::is('company/make-payment')? 'active':'' }}">
                <a href="{{ route('company_make_payment') }}"
                    >Make Payment</a
                >
            </li>
            <li class="list-group-item {{ Request::is('company/orders')? 'active':'' }}">
                <a href="{{ route('company_orders') }}">Orders</a>
            </li>
            <li class="list-group-item {{ Request::is('company/create-job')? 'active':'' }}">
                <a href="{{ route('company_jobs_create') }}">Create Job</a>
            </li>
            <li class="list-group-item {{ Request::is('company/jobs')? 'active':'' }}">
                <a href="{{ route('company_jobs') }}">All Jobs</a>
            </li>
            <li class="list-group-item {{ Request::is('company/photos')? 'active':'' }}">
                <a href="{{ route('company_photos') }}">Photos</a>
            </li>
            <li class="list-group-item {{ Request::is('company/videos')? 'active':'' }}">
                <a href="{{ route('company_videos') }}">Videos</a>
            </li>
            <li class="list-group-item">
                <a href="company-applications.html"
                    >Candidate Applications</a
                >
            </li>
            <li class="list-group-item">
                <a href="{{ route('company_profile_edit') }}"
                    >Edit Profile</a
                >
            </li>
            <li class="list-group-item">
                <a href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </div>
</div>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin_post')?'active':'' }}"><a class="nav-link" href="index.html"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Page settings</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="{{ route('home_page_content') }}"><i class="fas fa-angle-right"></i> Home</a></li>
                    <li class="nav-item">
                        <a href="{{ route('admin_why_choose_items') }}" class="nav-link"><i class="fas fa-angle-right"></i><span>Why choose items</span></a>
                    </li>
        
                    <li class="nav-item {{ Request::is('admin_post')?'active':'' }}">
                        <a href="{{ route('admin_post') }}" class="nav-link"><i class="fas fa-angle-right"></i><span>Post</span></a>
                    </li>
        
                    <li class="nav-item {{ Request::is('admin_term_page')?'active':'' }}">
                        <a href="{{ route('admin_term_page') }}" class="nav-link"><i class="fas fa-angle-right"></i><span>Term page</span></a>
                    </li>
        
                    <li class="nav-item {{ Request::is('admin_privacy_page')?'active':'' }}">
                        <a href="{{ route('admin_privacy_page') }}" class="nav-link"><i class="fas fa-angle-right"></i><span>Privacy</span></a>
                    </li>
        
                    <li class="nav-item {{ Request::is('admin_contact_page')?'active':'' }}">
                        <a href="{{ route('admin_contact_page') }}" class="nav-link"><i class="fas fa-angle-right"></i><span>Contact</span></a>
                    </li>
        
                    <li class="nav-item {{ Request::is('admin_package')?'active':'' }}">
                        <a href="{{ route('admin_package') }}" class="nav-link"><i class="fas fa-angle-right"></i><span>Packages</span></a>
                    </li>
                    <li class="nav-item {{ Request::is('admin_other_page')?'active':'' }}">
                        <a href="{{ route('admin_other_page') }}" class="nav-link"><i class="fas fa-angle-right"></i><span>Others</span></a>
                    </li>
        
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Jobs sections</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="{{ route('home_job_category') }}"><i class="fas fa-angle-right"></i> Job category</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_job_location') }}"><i class="fas fa-angle-right"></i> Jobs locations</a></li>
                    <li class="active"><a class="nav-link" href="{{ route('admin_job_type') }}"><i class="fas fa-angle-right"></i> Job type</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_job_gender') }}"><i class="fas fa-angle-right"></i> Jobs Gender</a></li>
                    <li class="active"><a class="nav-link" href="{{ route('admin_job_salary_range') }}"><i class="fas fa-angle-right"></i> Job salary</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_job_experience') }}"><i class="fas fa-angle-right"></i> Jobs experience</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Companies info</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="{{ route('admin_company_location') }}"><i class="fas fa-angle-right"></i> Company location</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_company_size') }}"><i class="fas fa-angle-right"></i> Company size</a></li>
                    <li class="active"><a class="nav-link" href="{{ route('admin_company_industry') }}"><i class="fas fa-angle-right"></i> Company Industry</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_job_gender') }}"><i class="fas fa-angle-right"></i> Jobs Gender</a></li>
                    <li class="active"><a class="nav-link" href="{{ route('admin_job_salary_range') }}"><i class="fas fa-angle-right"></i> Job salary</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_job_experience') }}"><i class="fas fa-angle-right"></i> Jobs experience</a></li>

                    <li class=""><a class="nav-link" href="{{ route('company_photos') }}"><i class="fas fa-angle-right"></i> Photos</a></li>
                    <li class="active"><a class="nav-link" href="{{ route('company_videos') }}"><i class="fas fa-angle-right"></i> Videos</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_job_experience') }}"><i class="fas fa-angle-right"></i> Jobs experience</a></li>
                </ul>
            </li>

            


        </ul>
    </aside>
</div>
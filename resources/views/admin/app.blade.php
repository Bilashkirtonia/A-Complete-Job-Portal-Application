@include('admin.layout.style')
@include('admin.layout.navbar')
@include('admin.layout.asidbar')

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>@yield('Heading')</h1>
                    @yield('button')

                </div>
                @yield('main_content')
            </section>
        </div>

    </div>
@include('admin.layout.script_footer')
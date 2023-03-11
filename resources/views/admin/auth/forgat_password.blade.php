@include('admin.layout.style')
<section class="section">
    <div class="container container-login">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary border-box">
                    <div class="card-header card-header-auth">
                        <h4 class="text-center">Reset Password</h4>
                    </div>

                   @if(session()->get('success'))
                        <div class="text-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif    
                    <div class="card-body card-body-auth">
                        <form method="POST" action="{{ route('admin_reset_password') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email Address" value="" autofocus>
                            </div>
                            @error('email')
                                <div class="text text-danger">{{ $message }}</div> 
                            @enderror
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Send Password Reset Link
                                </button>
                            </div>
                            <div class="form-group">
                                <div>
                                    <a href="login.html">
                                        Back to login page
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('admin.layout.script_footer')
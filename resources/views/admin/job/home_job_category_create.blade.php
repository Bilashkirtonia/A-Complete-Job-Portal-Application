@extends('admin.app')

@section('Heading','All job category')

@section('button')
    <div class="float-end">
        <a href="{{ route('home_job_category') }}" class="btn btn-info"> View all</a>
    </div>
@endsection
@section('main_content')
<section class="section">

    <div class="section-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('home_job_category_add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Category name *</label>
                                <input type="text" class="form-control" name="category_name" placeholder="Category">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Icons *</label>
                                <input type="text" class="form-control" name="icons" placeholder="Icons">
                            </div>

                            <div class="mb-4">
                                <label class="form-label"></label>
                                <button type="submit" name="submit" class="btn btn-primary">Send</button>
                            </div> 

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('admin.app')

@section('Heading','Add new items')

@section('button')
    <div class="float-end">
        <a href="{{ route('admin_why_choose_items') }}" class="btn btn-info"> View all</a>
    </div>
@endsection
@section('main_content')
<section class="section">

    <div class="section-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_why_choose_items_add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" placeholder="text">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Text *</label>
                                <input type="text" class="form-control" name="text" placeholder="text">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Icons *</label>
                                <input type="text" class="form-control" name="icon" placeholder="icons">
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
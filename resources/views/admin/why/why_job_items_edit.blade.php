@extends('admin.app')

@section('Heading','Edit why items')

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
                        <form action="{{ route('admin_why_choose_items_update',$why_choose_items->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{ $why_choose_items->heading }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Text *</label>
                                <input type="text" class="form-control" name="text" placeholder="text" value="{{ $why_choose_items->text }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Icon *</label>
                                <input type="text" class="form-control" name="icon" placeholder="icon" value="{{ $why_choose_items->icon }}">
                            </div>

                            <div class="mb-4">
                                <label class="form-label"></label>
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </div> 

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('admin.app')

@section('Heading','Job category')

@section('button')
    <div class="float-end">
        <a href="{{ route('home_job_category_create') }}" class="btn btn-info"> +Add new </a>
    </div>
@endsection
@section('main_content')
<section class="section">

    <div class="section-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Icons</th>
                                    <th>Icons preview</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($all_category as $key => $category)  
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $category->category }}</td>
                                        <td>{{ $category->icons }}</td>
                                        <td><i class="{{ $category->icons }}"></i></td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('home_job_category_edit',$category->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('home_job_category_delete',$category->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Item Name</label></div>
                                                            <div class="col-md-8">Laptop</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Description</label></div>
                                                            <div class="col-md-8">This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
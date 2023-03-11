@extends('admin.app')

@section('Heading','Why choose items')

@section('button')
    <div class="float-end">
        <a href="{{ route('admin_why_choose_items_create') }}" class="btn btn-info"> +Add new </a>
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
                                    <th style="width:500px">Text</th>
                                    <th>Icons</th>
                                    <th style="text-align: center">Icons preview</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($why_choose_items as $key => $choose)  
                                    <tr>
                                        <td>{{ $key=1 }}</td>
                                        <td>{{ $choose->heading }}</td>
                                        <td>{{ $choose->text }}</td>
                                        <td>{{ $choose->icon }}</td>
                                        <td style="text-align: center"><i class="{{ $choose->icon }}"></i></td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_why_choose_items_edit',$choose->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('admin_why_choose_items_delete',$choose->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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
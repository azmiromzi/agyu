@extends('admin.layoutsadmin.app')

@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h2 class="card-title mb-3">Create New Category</h2>

                        <form method="post" action="{{ route('admin.category.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <input class="form-control mb-3" type="text" placeholder="Category Name" name="name">
                                    <textarea id="elm1" name="desc" placeholder="Category Description"></textarea>

                                    <button type="submit" class="btn btn-success mt-3">Create New Category</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>

@endsection

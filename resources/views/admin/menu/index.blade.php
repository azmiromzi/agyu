@extends('admin.layoutsadmin.app')

@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">DATABASE MENU</h4>

                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <a href="{{ route('admin.category.create') }}" class="btn btn-success mt-3">Create New Category</a>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Descripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category )

                                        <tr data-id="1">
                                            <td data-field="id" style="width: 80px">{{ $loop->iteration }}</td>
                                            <td data-field="name">{{ $category->name }}</td>
                                            <td data-field="gender">{!! $category->desc !!}</td>
                                            <td style="width: 100px" class="d-flex">
                                                <a class="btn btn-outline-secondary btn-sm edit me-1" title="Edit" href="{{ route('admin.category.edit', $category->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection

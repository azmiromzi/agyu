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
                                <a href="{{ route('admin.menu.create') }}" class="btn btn-success mt-3 me-2">Create New Menu Makanan</a>
                                <a href="{{ route('admin.cetakpdfmenu') }}" class="btn btn-success mt-3">laporan pdf Menu Makanan</a>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Product name</th>
                                        <th>Descripsi</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)

                                        <tr data-id="1">
                                            <td data-field="id" style="width: 80px">{{ $loop->iteration }} </td>
                                            <td>{{ $menu->category->name }}</td>
                                            <td>{{ $menu->name }}</td>
                                            <td>{!! $menu->desc !!}</td>
                                            <td>{{ $menu->price }}</td>

                                            <td style="width: 100px" class="d-flex">
                                                <a class="btn btn-outline-secondary btn-sm edit me-1" title="Edit" href="{{ route('admin.menu.edit', $menu->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="post">
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

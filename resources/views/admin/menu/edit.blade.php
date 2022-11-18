@extends('admin.layoutsadmin.app')

@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h2 class="card-title mb-3">Edit Menu</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('admin.menu.update', $menu->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <input class="form-control mb-3" type="text" placeholder="Menu Name" name="name" value="{{ $menu->name }}">

                                    <input class="form-control mb-3" type="number" placeholder="Price" name="price" value="{{ $menu->price }}">

                                    <textarea id="elm1" name="desc" placeholder="Category Description">{!! $menu->desc !!}</textarea>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Menu Image </label>
                                        <div class="col-sm-10">
                                            <input name="image" class="form-control" type="file" id="image">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    {{-- <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-10">
                                            <img id="showImage" class="rounded avatar-lg"
                                                src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('upload/no_image.png') }}"
                                                alt="Card image cap">
                                        </div>
                                    </div> --}}

                                    <div class="mb-3">
                                        <label class="form-label">Choose Category Menu</label>
                                        <select class="form-control select2" name="category_id">
                                            <option>Select</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>

                                    </div>

                                    <button type="submit" class="btn btn-success mt-3">Edit Menu</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection

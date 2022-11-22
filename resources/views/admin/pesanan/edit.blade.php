@extends('admin.layoutsadmin.app')

@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h2 class="card-title mb-3">Edit pesanan</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('admin.pesanan.update', $pesanan->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <div class="mb-3">
                                        <label class="form-label">Choose status pesanan</label>
                                        <select class="form-control select2" name="status">
                                            <option>Select</option>
                                            <option value="sedang di proses">sedang di proses</option>
                                            <option value="sedang di antar">sedang di antar</option>
                                            <option value="pesanan diterima">pesanan diterima</option>
                                        </select>

                                    </div>

                                    <button type="submit" class="btn btn-success mt-3">Edit pesanan</button>
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

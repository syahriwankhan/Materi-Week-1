@extends('baseBlog')
@section('content')
<div class="container" style="background-color: grey;">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Tambah Blog
                </div>
                <div class="card-body">
                    <form action="{{url('post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Tag</label>
                            <input type="text" class="form-control" name="tag">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Content</label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save">Simpan Data</i></button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
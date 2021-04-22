@extends('admin.templates.master')

@section('content')
    <h3>Add new Author</h3>
<form role="form" action="{{ route('admin.author.store') }}" method="post">
    @csrf
    <div class="card-body">
        <div class="form-group @error('name') 'has-error' @enderror">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Masukkan nama Author..">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <!-- /.card-body -->
</form>
@endsection

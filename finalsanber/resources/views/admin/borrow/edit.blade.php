@extends('admin.templates.master')

@section('content')
    <h3>Edit Data Author</h3>
<form role="form" action="{{ route('admin.author.update', $author) }}" method="post">
    @csrf
    @method("PUT")
    <div class="card-body">
        <div class="form-group @error('name') 'has-error' @enderror">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name"
            value="{{ old('name') ?? $author->name }}" placeholder="Masukkan nama Author..">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    <!-- /.card-body -->
</form>
@endsection

@extends('admin.templates.master')

@section('content')
    <h3>Edit Data Book</h3>
<form role="form" action="{{ route('admin.book.update', $book) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="card-body">

        <div class="form-group @error('title') 'has-error' @enderror">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="title">Judul</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $book->title ?? old('title') }}" placeholder="Masukkan judul Buku..">
        </div>

        <div class="form-group @error('description') 'has-error' @enderror">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="description">Description</label><br>
            <textarea name="description" class="form-control" id="description" cols="30" rows="3" placeholder="Masukkan deskripsi buku..">
                {{ $book->description ?? old('description') }}
            </textarea>
        </div>

        <div class="form-group @error('author_id') 'has-error' @enderror">
            @error('author_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="author_id">Author</label><br>
            <select name="author_id" id="author_id" class="form-control select2">
                @foreach ($authors as $author)
                    <option
                        value="{{ $author->id }}"
                        @if ($author->id === $book->author_id)
                            selected
                        @endif
                    >
                        {{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group @error('cover') 'has-error' @enderror">
            @error('cover')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="cover">Sampul Buku</label>
            <input type="file" name="cover" class="form-control">
        </div>

        <div class="form-group @error('quantity') 'has-error' @enderror">
            @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="quantity">Jumlah</label>
            <input type="text" class="form-control" name="quantity" id="quantity" value="{{ $book->quantity ?? old('quantity') }}" placeholder="Masukkan jumlah buku..">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>

    </div>
    <!-- /.card-body -->
</form>
@endsection

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush

@push('data-tables')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $(['.select2'].select2();)
    </script>
@endpush

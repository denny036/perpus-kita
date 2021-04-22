@extends('admin.templates.master')

@section('item-active')
<a href="{{ route('admin.book.index') }}">Book</a>
@endsection

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Book</h3>
            <a class="btn btn-primary" href="{{ route('admin.book.create') }}">Add new book</a>
            <a href="{{ route('admin.export.user') }}" class="btn btn-success my-3" target="_blank">Export to Excel</a>
            <br>
        </div>

        <div class="box-body">
            <br>
            @include('admin.templates.partials.alerts')
            <table id="dataTable" class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Buku</th>
                        <th>Author</th>
                        <th>Sampul Buku</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>

        </div>

    </div>

    <form action="" method="post" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete" class="btn btn-danger btn-sm mr-2" style="display: none;">
    </form>

@endsection

@push('data-tables')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.book.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable:
                    false},
                    { data: 'title'},
                    { data: 'description'},
                    { data: 'quantity'},
                    { data: 'author'},
                    { data: 'cover'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush

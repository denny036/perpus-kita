@extends('admin.templates.master')

@section('item-active')
<a href="{{ route('admin.author.index') }}">Peminjaman</a>
@endsection

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Peminjaman Buku</h3>
        </div>

        <div class="box-body">
            <br>
            @include('admin.templates.partials.alerts')
            <table id="dataTable" class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Judul Buku</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>

        </div>

    </div>

    <form action="" method="post" id="returnForm">
        @csrf
        @method("PUT")
        <input type="submit" value="Return" class="btn btn-danger btn-sm mr-2" style="display: none;">
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
                ajax: '{{ route('admin.borrow.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable:
                    false},
                    { data: 'user'},
                    { data: 'book_title'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush

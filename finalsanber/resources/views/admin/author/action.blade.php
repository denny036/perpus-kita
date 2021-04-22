<a href="{{ route('admin.author.edit', $model) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
<button href="{{ route('admin.author.destroy', $model) }}" class="btn btn-danger btn-sm mr-2"
    id="delete">Delete</button>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault();

        var href =  $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin hapus data ini?',
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
            if (result.isConfirmed) {

                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();

                Swal.fire(
                'Terhapus!',
                'Data berhasil dihapus!',
                'success'
                )
            }
        })

    })
</script>

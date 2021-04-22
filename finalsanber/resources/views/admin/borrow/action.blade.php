<button href="{{ route('admin.borrow.return', $model) }}" class="btn btn-info btn-sm mr-2"
    id="return">Pengembalian Buku</button>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $('button#return').on('click', function(e) {
            e.preventDefault();

            var href =  $(this).attr('href');

            Swal.fire({
                title: 'Apakah Anda ingin mengembalikan buku ini?',
                text: "Konfirmasi data & buku yang dikembalikan sama!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, benar. Data sudah diperiksa!'
                }).then((result) => {
                if (result.isConfirmed) {

                    document.getElementById('returnForm').action = href;
                    document.getElementById('returnForm').submit();

                    Swal.fire(
                    'Dikembalikan!',
                    'Buku dikembalikan!',
                    'success'
                    )
                }
            })

        })
    </script>

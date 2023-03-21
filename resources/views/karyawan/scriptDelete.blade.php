<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function deleteData(e) {
        let id = e.getAttribute('data-id');

        Swal.fire({
            title: 'Apakah Anda Yakin ?',
            text: "Data Tidak Dapat Dipulihkan !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: 'karyawan/' + id,
                    data: {
                        "_token": '{{ csrf_token() }}',
                        '_method': 'DELETE'
                    },
                }).then((result) => {
                    location.reload();
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: 'Data Berhasil Dihapus',
                        showConfirmButton: true,
                    });
                });
            }
        });
    }
</script>

<script>
    $(document).ready(function() {
            $('.deleteBtn').on('click', function(e) {
                e.preventDefault();
                var form = $(this).parents('form.delete');
                swal({
                  title: "Hapus?",
                  text: "Apakah anda yakin untuk menghapus ini?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    form.submit();
                  } else {
                    swal("Data batal dihapus", {
                        icon: "success",
                    });
                    playSound();
                  }
                });
            });
            
        });
</script>
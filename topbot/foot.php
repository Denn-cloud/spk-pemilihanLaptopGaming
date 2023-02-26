<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<!-- sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>


<!-- Alert Untuk Delete Data -->
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Data Berhasil Dihapus',
            timer: 2000,
            showConfirmButton: false
        })
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>

<!-- Alert Untuk Tambah Data -->
<?php if (@$_SESSION['tambah']) { ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Berhasil Tambah Data',
            timer: 2000,
            showConfirmButton: false
        })
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['tambah']);
} ?>

<!-- Alert Untuk Update Data -->
<?php if (@$_SESSION['update']) { ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Berhasil Update Data',
            timer: 2000,
            showConfirmButton: false
        })
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['update']);
} ?>

<!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
<script>
    $('.alert_notif').on('click', function() {
        var getLink = $(this).attr('href');
        Swal.fire({
            title: "Yakin hapus data?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonColor: '#3085d6',
            cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                window.location.href = getLink
            }
        })
        return false;
    });
</script>

</body>

</html>
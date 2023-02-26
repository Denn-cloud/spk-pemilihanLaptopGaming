<!-- Tabel Alternatif -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Alternatif</h6>
    </div>
    <div class="card-body">
        <a href="insert.php?page=insertAlternatif" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Tambah Alternatif</span>
        </a>
        <div class="my-2"></div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Alternatif</th>
                    <th>Alternatif</th>
                    <th>Merk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                include "config.php";
                $a = "select * from tb_alternatif";
                $b = $con->query($a);
                while ($c = $b->fetch_row()) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $c[0]; ?></td>
                        <td><?php echo $c[1]; ?></td>
                        <td><?php echo $c[2]; ?></td>
                        <td>
                            <a href="editPage.php?page=ubahAlternatif&id_alternatif=<?php echo $c[0]; ?>" class="btn btn-success">Ubah</a>
                            <a href="proses.php?aksi=hapusAlternatif&id_alternatif=<?php echo $c[0]; ?>" class="btn btn-danger alert_notif">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
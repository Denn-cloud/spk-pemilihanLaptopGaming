<!-- Tabel Bobot -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Bobot</h6>
    </div>
    <div class="card-body">
        <a href="insert.php?page=insertBobot" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Tambah Bobot</span>
        </a>
        <div class="my-2"></div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Bobot</th>
                    <th>Kriteria</th>
                    <th>Nilai Bobot (ROC)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                include "config.php";
                $a = "select tb_bobot.id_bobot,tb_kriteria.nm_kriteria,tb_bobot.valuebobot FROM tb_bobot,tb_kriteria where tb_kriteria.id_kriteria=tb_bobot.id_kriteria";
                $b = $con->query($a);
                while ($c = $b->fetch_array()) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $c[0]; ?></td>
                        <td><?php echo $c[1]; ?></td>
                        <td><?php echo $c[2]; ?></td>
                        <td>
                            <a href="editPage.php?page=ubahBobot&id_bobot=<?php echo $c[0]; ?>" class="btn btn-success">Ubah</a>
                            <a href="proses.php?aksi=hapusBobot&id_bobot=<?php echo $c[0]; ?>" class="btn btn-danger alert_notif">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
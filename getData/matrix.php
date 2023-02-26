<!-- Tabel Penilaian -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Matrix</h6>
    </div>
    <div class="card-body">
        <a href="insert.php?page=insertMatrix" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Tambah Matrix</span>
        </a>
        <div class="my-2"></div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Kriteria</th>
                    <th>Value Bobot</th>
                    <th>Alternatif</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                include "config.php";
                $a = "select matrixkeputusan.id_penilaian,tb_kriteria.nm_kriteria,tb_bobot.valuebobot,tb_alternatif.nm_alternatif,matrixkeputusan.valuematrix from matrixkeputusan, tb_kriteria, tb_bobot, tb_alternatif where tb_bobot.id_bobot=matrixkeputusan.id_bobot AND tb_bobot.id_kriteria=tb_kriteria.id_kriteria AND matrixkeputusan.id_alternatif=tb_alternatif.id_alternatif ORDER BY id_penilaian ASC";
                $b = $con->query($a);
                while ($c = $b->fetch_row()) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $c[0]; ?></td>
                        <td><?php echo $c[1]; ?></td>
                        <td><?php echo $c[2]; ?></td>
                        <td><?php echo $c[3]; ?></td>
                        <td><?php echo $c[4]; ?></td>
                        <td>
                            <a href="editPage.php?page=ubahMatrix&id_penilaian=<?php echo $c[0]; ?>" class="btn btn-success">Ubah</a>
                            <a href="proses.php?aksi=hapusMatrix&id_penilaian=<?php echo $c[0]; ?>" class="btn btn-danger alert_notif">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
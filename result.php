<?php
include 'topbot/head.php'
?>

<body id="page-top">

    <?php
    include 'barSelect/sideSAW.php';
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php
            include 'barSelect/nav.php';
            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <?php if ($_GET['page'] == 'vmatrixkeputusan') { ?>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">View Matrix Keputusan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="my-2"></div>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Penilaian</th>
                                                <th>ID Alternatif</th>
                                                <th>Alternatif</th>
                                                <th>Merk</th>
                                                <th>ID Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>ID Bobot</th>
                                                <th>Nilai Bobot (ROC)</th>
                                                <th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            include "config.php";
                                            $a = "SELECT `matrixkeputusan`.`id_penilaian` AS 
                                            `id_penilaian`,`tb_alternatif`.`id_alternatif` AS 
                                            `id_alternatif`,`tb_alternatif`.`nm_alternatif` AS 
                                            `nm_alternatif`,`tb_alternatif`.`merk` AS 
                                            `merk`,`tb_kriteria`.`id_kriteria` AS 
                                            `id_kriteria`,`tb_kriteria`.`nm_kriteria` AS 
                                            `nm_kriteria`,`tb_bobot`.`id_bobot` AS 
                                            `id_bobot`,`tb_bobot`.`valuebobot` AS 
                                            `valuebobot`,`matrixkeputusan`.`valuematrix` AS 
                                            `nilai` from (((`matrixkeputusan` join `tb_bobot`) 
                                            join `tb_kriteria`) join `tb_alternatif`) where 
                                            ((`matrixkeputusan`.`id_alternatif` = `tb_alternatif`.`id_alternatif`) 
                                            and (`matrixkeputusan`.`id_bobot` = `tb_bobot`.`id_bobot`) 
                                            and (`tb_kriteria`.`id_kriteria` = `tb_bobot`.`id_kriteria`))";
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
                                                    <td><?php echo $c[5]; ?></td>
                                                    <td><?php echo $c[6]; ?></td>
                                                    <td><?php echo $c[7]; ?></td>
                                                    <td><?php echo $c[8]; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php
                        } elseif ($_GET['page'] == 'normalisasi') { ?>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">View Normalisasi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="my-2"></div>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Penilaian</th>
                                                <th>ID Daerah</th>
                                                <th>Alternatif</th>
                                                <th>Merk</th>
                                                <th>ID Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>ID Bobot</th>
                                                <th>Nilai</th>
                                                <th>Normalisasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            include "config.php";
                                            $a = "SELECT `vmatrixkeputusan`.`id_penilaian` AS 
                                            `id_penilaian`,`vmatrixkeputusan`.`id_alternatif` AS 
                                            `id_alternatif`,`vmatrixkeputusan`.`nm_alternatif` AS 
                                            `nm_alternatif`,`vmatrixkeputusan`.`merk` AS 
                                            `merk`,`vmatrixkeputusan`.`id_kriteria` AS 
                                            `id_kriteria`,`vmatrixkeputusan`.`nm_kriteria` AS 
                                            `nm_kriteria`,`vmatrixkeputusan`.`id_bobot` AS 
                                            `id_bobot`,`vmatrixkeputusan`.`nilai` AS 
                                            `nilai`,(`vmatrixkeputusan`.`nilai` / `nilaimax`.`maksimum`) AS 
                                            `normalisasi` from (`vmatrixkeputusan` join `nilaimax`) where 
                                            (`nilaimax`.`id_kriteria` = `vmatrixkeputusan`.`id_kriteria`) 
                                            group by `vmatrixkeputusan`.`id_penilaian`";
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
                                                    <td><?php echo $c[5]; ?></td>
                                                    <td><?php echo $c[6]; ?></td>
                                                    <td><?php echo $c[7]; ?></td>
                                                    <td><?php echo $c[8]; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <?php
                        } elseif ($_GET['page'] == 'rangking') { ?>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">View Rangking</h6>
                                </div>
                                <div class="card-body">
                                    <div class="my-2"></div>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Alternatif</th>
                                                <th>Alternatif</th>
                                                <th>Rangking</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            include "config.php";
                                            $a = "SELECT `vprarangking`.`id_alternatif` AS 
                                            `id_alternatif`,`vprarangking`.`nm_alternatif` AS 
                                            `nm_alternatif`,sum(`vprarangking`.`prarangking`) AS 
                                            `rangking` from `vprarangking` group by `vprarangking`.`id_alternatif` ORDER BY rangking DESC";
                                            $b = $con->query($a);
                                            while ($c = $b->fetch_row()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $c[0]; ?></td>
                                                    <td><?php echo $c[1]; ?></td>
                                                    <td><?php echo $c[2]; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php
        include 'barSelect/copyright.php';
        ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php
    include 'topbot/foot.php';
    ?>
<?php
include 'topbot/head.php';
?>

<body id="page-top">

    <?php
    include 'barSelect/sideEdit.php';
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

                        <?php if ($_GET['page'] == 'ubahAlternatif') {
                            include "config.php";
                            $id = $_GET['id_alternatif'];
                            $a = "select * from tb_alternatif where id_alternatif='$id'";
                            $b = $con->query($a);
                            while ($c = $b->fetch_row()) {
                        ?>
                                <!-- Tambah Alternatif -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Tambah Alternatif</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="proses.php" method="POST">
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">ID Alternatif</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="id" value="<?= $c[0] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Alternatif</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nm_alternatif" value="<?= $c[1] ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Merk</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="merk" value="<?= $c[2] ?>">
                                                </div>
                                            </div>
                                            <input type="submit" name="editAlternatif" value="Submit" class="btn btn-primary">
                                            <a href="view.php?page=alternatif" class="btn btn-danger float-right">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                        } elseif ($_GET['page'] == 'ubahKriteria') {
                            include "config.php";
                            $id = $_GET['id_kriteria'];
                            $a = "select * from tb_kriteria where id_kriteria='$id'";
                            $b = $con->query($a);
                            while ($c = $b->fetch_row()) {
                            ?>
                                <!-- Tambah Kriteria -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="proses.php" method="POST">
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">ID Kriteria</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="id" value="<?= $c[0]; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kriteria</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nm_kriteria" value="<?= $c[1]; ?>">
                                                </div>
                                            </div>
                                            <input type="submit" name="editKriteria" value="Submit" class="btn btn-primary">
                                            <a href="view.php?page=kriteria" class="btn btn-danger float-right">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                        } elseif ($_GET['page'] == 'ubahBobot') {
                            include "config.php";
                            $id = $_GET['id_bobot'];
                            $a = "select * from tb_bobot, tb_kriteria where tb_bobot.id_kriteria=tb_kriteria.id_kriteria and id_bobot='$id'";
                            $b = $con->query($a);
                            while ($d = $b->fetch_row()) {
                            ?>
                                <!-- Tambah Bobot -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Tambah Bobot</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="proses.php" method="POST">
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">ID Bobot</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="id" value="<?= $d[0]; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">ID Kriteria</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="id_kriteria">
                                                        <option value=<?= $d[1] ?>><?= $d[4] ?></option>
                                                        <?php
                                                        include 'config.php';
                                                        $sql = "SELECT * FROM tb_kriteria";
                                                        $b = $con->query($sql);
                                                        while ($c = $b->fetch_array()) {
                                                        ?>
                                                            <option value=<?php echo $c[0] ?>>
                                                                <?php echo $c[1] ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nilai Bobot (ROC)</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="valuebobot" value="<?= $d[2]; ?>">
                                                </div>
                                            </div>
                                            <input type="submit" name="tambahBobot" value="Submit" class="btn btn-primary">
                                            <a href="view.php?page=bobot" class="btn btn-danger float-right">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                        } elseif ($_GET['page'] == 'ubahMatrix') {
                            include "config.php";
                            $id = $_GET['id_penilaian'];
                            $a = "SELECT matrixkeputusan.id_penilaian,tb_alternatif.id_alternatif,tb_alternatif.nm_alternatif,tb_bobot.id_bobot,tb_bobot.valuebobot,matrixkeputusan.valuematrix from matrixkeputusan, tb_bobot, tb_alternatif where tb_bobot.id_bobot=matrixkeputusan.id_bobot AND matrixkeputusan.id_alternatif=tb_alternatif.id_alternatif AND id_penilaian='$id'";
                            $b = $con->query($a);
                            while ($d = $b->fetch_row()) {
                            ?>
                                <!-- Tambah Matrix -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Tambah Matrix</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="proses.php" method="POST">
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">ID Matrix</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="id" value="<?= $d[0]; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">ID Bobot</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" name="id" value="<?= $d[0]; ?>">
                                                    <select class="form-control" name="id_bobot">
                                                        <option value=<?= $d[3] ?>><?= $d[4] ?></option>
                                                        <?php
                                                        include 'config.php';
                                                        $sql = "SELECT * FROM tb_bobot";
                                                        $b = $con->query($sql);
                                                        while ($c = $b->fetch_array()) {
                                                        ?>
                                                            <option value=<?php echo $c['id_bobot'] ?>>
                                                                <?php echo $c['valuebobot'] ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">ID Alternatif</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="id_alternatif">
                                                        <option value=<?= $d[1] ?>><?= $d[2] ?></option>
                                                        <?php
                                                        include 'config.php';
                                                        $sql = "SELECT * FROM tb_alternatif";
                                                        $b = $con->query($sql);
                                                        while ($c = $b->fetch_array()) {
                                                        ?>
                                                            <option value=<?php echo $c['id_alternatif'] ?>>
                                                                <?php echo $c['nm_alternatif'] ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Value</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="value" value="<?= $d[5] ?>">
                                                </div>
                                            </div>
                                            <input type="submit" name="editMatrix" value="Submit" class="btn btn-primary">
                                            <a href="view.php?page=matrix" class="btn btn-danger float-right">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
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
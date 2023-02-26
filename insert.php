<?php
include 'topbot/head.php';
?>

<body id="page-top">

    <?php
    include 'barSelect/sideInsert.php';
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

                        <?php if ($_GET['page'] == 'insertAlternatif') { ?>
                            <!-- Tambah Alternatif -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Alternatif</h6>
                                </div>
                                <div class="card-body">
                                    <form action="proses.php" method="POST">
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Alternatif</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nm_alternatif">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Merk</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="merk">
                                            </div>
                                        </div>
                                        <input type="submit" name="tambahAlternatif" value="Submit" class="btn btn-primary">
                                        <a href="view.php?page=alternatif" class="btn btn-danger float-right">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        <?php
                        } elseif ($_GET['page'] == 'insertKriteria') { ?>
                            <!-- Tambah Kriteria -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
                                </div>
                                <div class="card-body">
                                    <form action="proses.php" method="POST">
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kriteria</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nm_kriteria">
                                            </div>
                                        </div>
                                        <input type="submit" name="tambahKriteria" value="Submit" class="btn btn-primary">
                                        <a href="view.php?page=kriteria" class="btn btn-danger float-right">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        <?php
                        } elseif ($_GET['page'] == 'insertBobot') { ?>
                            <!-- Tambah Bobot -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Bobot</h6>
                                </div>
                                <div class="card-body">
                                    <form action="proses.php" method="POST">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Kriteria</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="id_kriteria">
                                                    <option value="">-- Pilih Kriteria --</option>
                                                    <?php
                                                    include 'config.php';
                                                    $sql = "SELECT * FROM tb_kriteria";
                                                    $b = $con->query($sql);
                                                    while ($c = $b->fetch_array()) {
                                                    ?>
                                                        <option value=<?php echo $c['id_kriteria'] ?>>
                                                            <?php echo $c['nm_kriteria'] ?>
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
                                                <input type="text" class="form-control" name="valuebobot">
                                            </div>
                                        </div>
                                        <input type="submit" name="tambahBobot" value="Submit" class="btn btn-primary">
                                        <a href="view.php?page=bobot" class="btn btn-danger float-right">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        <?php
                        } elseif ($_GET['page'] == 'insertMatrix') { ?>
                            <!-- Tambah Matrix -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Matrix</h6>
                                </div>
                                <div class="card-body">
                                    <form action="proses.php" method="POST">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Kriteria</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="id_bobot">
                                                    <option value="">-- Pilih Kriteria --</option>
                                                    <?php
                                                    include 'config.php';
                                                    $sql = "SELECT tb_bobot.id_bobot,tb_kriteria.nm_kriteria FROM tb_bobot, tb_kriteria WHERE tb_kriteria.id_kriteria=tb_bobot.id_kriteria";
                                                    $b = $con->query($sql);
                                                    while ($c = $b->fetch_array()) {
                                                    ?>
                                                        <option value=<?php echo $c['id_bobot'] ?>>
                                                            <?php echo $c['nm_kriteria'] ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Alternatif</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="id_alternatif">
                                                    <option value="">-- Pilih Alternatif --</option>
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
                                                <input type="text" class="form-control" name="value">
                                            </div>
                                        </div>
                                        <input type="submit" name="tambahMatrix" value="Submit" class="btn btn-primary">
                                        <a href="view.php?page=matrix" class="btn btn-danger float-right">Cancel</a>
                                    </form>
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
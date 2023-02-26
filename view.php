<?php
include 'topbot/head.php'
?>

<body id="page-top">

    <?php
    include 'barSelect/sideView.php'
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php
            include 'barSelect/nav.php'
            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <?php if ($_GET['page'] == 'kriteria') { ?>
                            <?php
                            include 'getData/kriteria.php';
                            ?>
                        <?php
                        } elseif ($_GET['page'] == 'alternatif') { ?>
                            <?php
                            include 'getData/alternatif.php';
                            ?>
                        <?php
                        } elseif ($_GET['page'] == 'bobot') { ?>
                            <?php
                            include 'getData/bobot.php';
                            ?>
                        <?php
                        } elseif ($_GET['page'] == 'matrix') { ?>
                            <?php
                            include 'getData/matrix.php';
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
        include 'barSelect/copyright.php'
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
    include 'topbot/foot.php'
    ?>
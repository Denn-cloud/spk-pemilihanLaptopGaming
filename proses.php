<?php
include "config.php";

if (isset($_POST['tambahAlternatif'])) {
    session_start();

    $nm_alternatif = $_POST['nm_alternatif'];
    $merk = $_POST['merk'];

    $sql = "INSERT INTO tb_alternatif (nm_alternatif, merk) values ('" . $nm_alternatif . "', '" . $merk . "')";
    $a = $con->query($sql);

    $_SESSION["tambah"] = 'Data Berhasil Ditambahkan';

    if ($a == true) {
        header("location:view.php?page=alternatif");
    } else {
        echo "error";
    }
} elseif (isset($_POST['tambahKriteria'])) {
    session_start();

    $kriteria = $_POST['nm_kriteria'];

    $sql = "INSERT INTO tb_kriteria (nm_kriteria) values ('" . $kriteria . "')";
    $a = $con->query($sql);

    $_SESSION["tambah"] = 'Data Berhasil Ditambahkan';

    if ($a == true) {
        header("location:view.php?page=kriteria");
    } else {
        echo "error";
    }
} elseif (isset($_POST['tambahBobot'])) {
    session_start();

    $kriteria = $_POST['id_kriteria'];
    $bobot = $_POST['valuebobot'];

    $sql = "INSERT INTO tb_bobot (id_kriteria, valuebobot) values ('" . $kriteria . "', '" . $bobot . "')";
    $a = $con->query($sql);

    $_SESSION["tambah"] = 'Data Berhasil Ditambahkan';

    if ($a == true) {
        header("location:view.php?page=bobot");
    } else {
        echo "error";
    }
} elseif (isset($_POST['tambahMatrix'])) {
    session_start();

    $bobot = $_POST['id_bobot'];
    $alternatif = $_POST['id_alternatif'];
    $nilai  = $_POST['value'];

    $sql = "INSERT INTO matrixkeputusan (id_bobot, id_alternatif, valuematrix) values ('" . $bobot . "', '" . $alternatif . "', '" . $nilai . "')";
    $a = $con->query($sql);

    $_SESSION["tambah"] = 'Data Berhasil Ditambahkan';

    if ($a == true) {
        header("location:view.php?page=matrix");
    } else {
        echo "error";
    }


    //Masuk Proses Edit
    //Edit Alternatif
} elseif (isset($_POST['editAlternatif'])) {
    session_start();

    $id = $_POST['id'];
    $nm_alternatif = $_POST['nm_alternatif'];
    $merk = $_POST['merk'];

    $sql = "UPDATE tb_alternatif SET nm_alternatif='$nm_alternatif', merk='$merk' WHERE id_alternatif='$id'";
    $a = $con->query($sql);

    $_SESSION["update"] = 'Data Berhasil Diupdate';

    if ($a == true) {
        header("location:view.php?page=alternatif");
    } else {
        echo "error";
    }
    //Edit Kriteria
} elseif (isset($_POST['editKriteria'])) {
    session_start();

    $id = $_POST['id'];
    $kriteria = $_POST['nm_kriteria'];

    $sql = "UPDATE tb_kriteria SET nm_kriteria='$kriteria' WHERE id_kriteria='$id'";
    $a = $con->query($sql);

    $_SESSION["update"] = 'Data Berhasil Diupdate';

    if ($a == true) {
        header("location:view.php?page=kriteria");
    } else {
        echo "error";
    }
    //Edit Bobot
} elseif (isset($_POST['editBobot'])) {
    session_start();

    $id = $_POST['id'];
    $kriteria = $_POST['id_kriteria'];
    $bobot = $_POST['valuebobot'];

    $sql = "UPDATE tb_bobot SET id_kriteria='$kriteria', valuebobot='$bobot' WHERE id_bobot='$id'";
    $a = $con->query($sql);

    $_SESSION["update"] = 'Data Berhasil Diupdate';

    if ($a == true) {
        header("location:view.php?page=bobot");
    } else {
        echo "error";
    }
    //Edit Matrix
} elseif (isset($_POST['editMatrix'])) {
    session_start();

    $id = $_POST['id'];
    $bobot = $_POST['id_bobot'];
    $alternatif = $_POST['id_alternatif'];
    $nilai  = $_POST['value'];

    $sql = "UPDATE matrixkeputusan SET id_bobot='$bobot', id_alternatif='$alternatif', valuematrix='$nilai' WHERE id_penilaian='$id'";
    $a = $con->query($sql);

    $_SESSION["update"] = 'Data Berhasil Diupdate';

    if ($a == true) {
        header("location:view.php?page=matrix");
    } else {
        echo "error";
    }

    //Masuk Proses Delete
    //Hapus Kriteria
} elseif ($_GET['aksi'] == 'hapusKriteria') {
    session_start();

    $sql = "delete from tb_kriteria where id_kriteria='$_GET[id_kriteria]'";
    $a = $con->query($sql);

    $_SESSION["sukses"] = 'Data Berhasil Dihapus';

    if ($a == true) {
        header("location:view.php?page=kriteria");
    } else {
        echo "error";
    }
    //Hapus Alternatif
} elseif ($_GET['aksi'] == 'hapusAlternatif') {
    session_start();

    $sql = "delete from tb_alternatif where id_alternatif='$_GET[id_alternatif]'";
    $a = $con->query($sql);

    $_SESSION["sukses"] = 'Data Berhasil Dihapus';

    if ($a == true) {
        header("location:view.php?page=alternatif");
    } else {
        echo "error";
    }
    //Hapus Bobot
} elseif ($_GET['aksi'] == 'hapusBobot') {
    session_start();

    $sql = "delete from tb_bobot where id_bobot='$_GET[id_bobot]'";
    $a = $con->query($sql);

    $_SESSION["sukses"] = 'Data Berhasil Dihapus';

    if ($a == true) {
        header("location:view.php?page=bobot");
    } else {
        echo "error";
    }
    //Hapus Matrix
} elseif ($_GET['aksi'] == 'hapusMatrix') {
    session_start();

    $sql = "delete from matrixkeputusan where id_penilaian='$_GET[id_penilaian]'";
    $a = $con->query($sql);

    $_SESSION["sukses"] = 'Data Berhasil Dihapus';

    if ($a == true) {
        header("location:view.php?page=matrix");
    } else {
        echo "error";
    }
}

<?php
if ($_POST) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    if (empty($nama_pelanggan)) {
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif (empty($telp)) {
        echo "<script>alert('telp tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif (empty($id_pelanggan)) {
        echo "<script>alert('id pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "insert into pelanggan (nama, id_pelanggan, alamat, telp) value ('" . $nama_pelanggan . "','" . $id_pelanggan . "','" . $alamat . "','" . $telp . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tampil_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}

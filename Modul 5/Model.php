<?php
require "Koneksi.php";

class Model
{
                                                // FUNGSI UNTUK MEMBER //
    public function getMember()
    {
        $sql = "SELECT * FROM member";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function deleteMember($id)
    {
        $sql = "DELETE FROM member WHERE id_member = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function setMember($nama, $nomor, $alamat, $tgl_terakhir_bayar)
    {
        $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES ('$nama', '$nomor', '$alamat', now(), '$tgl_terakhir_bayar')";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function editMember($id, $nama, $nomor, $alamat, $tgl_terakhir_bayar)
    {
        $sql = "UPDATE member SET nama_member = '$nama', nomor_member = '$nomor', alamat = '$alamat', tgl_terakhir_bayar = '$tgl_terakhir_bayar' WHERE id_member = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function getMemberById($id)
    {
        $sql = "SELECT * FROM member WHERE id_member = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

                                                    // FUNGSI UNTUK BUKU //
    public function getBuku()
    {
        $sql = "SELECT * FROM buku";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function deleteBuku($id)
    {
        $sql = "DELETE FROM buku WHERE id_buku = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function setBuku($judul, $penulis, $penerbit, $tahunTerbit)
    {
        $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES ('$judul', '$penulis', '$penerbit', '$tahunTerbit')";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function editBuku($id, $judul, $penulis, $penerbit, $tahunTerbit)
    {
        $sql = "UPDATE buku SET judul_buku = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahunTerbit' WHERE id_buku = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function getBukuById($id)
    {
        $sql = "SELECT * FROM buku WHERE id_buku = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

                                                    // FUNGSI UNTUK PEMINJAMAN //
    public function getPeminjaman()
    {
        $sql = "SELECT * FROM peminjaman";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function deletePeminjaman($id)
    {
        $sql = "DELETE FROM peminjaman WHERE id_peminjaman = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function setPeminjaman($tglPinjam, $tglKembali)
    {
        $sql = "INSERT INTO peminjaman (tgl_peminjaman, tgl_kembali) VALUES ('$tglPinjam', '$tglKembali')";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function editPeminjaman($id, $tglPinjam, $tglKembali)
    {
        $sql = "UPDATE peminjaman SET tgl_peminjaman = '$tglPinjam', tgl_kembali = '$tglKembali' WHERE id_peminjaman = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }

    public function getPeminjamanById($id)
    {
        $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = '$id'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        return $result;
    }
}
?>
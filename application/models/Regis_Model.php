<?php
class Regis_Model extends CI_Model
{
    function addPendaftar($nama, $alamat, $email, $tl, $no_telp, $file_upload, $tambahan, $jenis_kelamin, $pelatihan, $sertifikasi, $jumlah_bayar)
    {
        $query="insert into pendaftar values('', '$nama', '$alamat', '$email', '$tl', '$no_telp', '$file_upload', '$tambahan', '$jenis_kelamin', '$pelatihan', '$sertifikasi', '$jumlah_bayar')";
        $this->db->query($query);
    }

    function getDataPilihanLayanan(){
        $query = $this->db->get('layanan');
        return $query->result_array();
    }
}

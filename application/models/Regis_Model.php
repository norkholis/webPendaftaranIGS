<?php
class Regis_model extends CI_Model
{


    function addPendaftar($nama, $alamat, $email, $tl, $no_telp, $file_upload, $tambahan, $jenis_kelamin, $jumlah_bayar, $tempat, $jam, $layanan)
    {
        $query="insert into pendaftar values('', '$nama', '$alamat', '$email', '$tl', '$no_telp', '$file_upload', '$tambahan', '$jenis_kelamin', '$jumlah_bayar', '$tempat', '$jam', '$layanan')";
        $this->db->query($query);
    }

    function getDataLayanan()
    {
        $layanan = $this->db->query("SELECT * FROM layanan");
        return $layanan;
    }

    function getDetailLayanan($id)
    {
        $detail = $this->db->query("SELECT * FROM detail_layanan WHERE fk_id_layanan='$id'");
        return $detail->result();
    }

    function getDetailedLayanan($id)
    {
        $detail = $this->db->query("SELECT * FROM detail_layanan WHERE id_detail='$id'");
        if ($detail->num_rows()>0) {
            foreach ($detail->result() as $data){
                $detail=array(
                    'id_detail'=>$data->id_detail,
                    'tanggal_layanan'=>$data->tanggal_layanan,
                    'harga_layanan'=>$data->harga_layanan,
                    'jam_layanan'=>$data->jam_layanan,
                    'tempat_layanan'=>$data->tempat_layanan,
                    'fk_id_layanan'=>$data->fk_id_layanan,
                    'detail_nama_layanan'=>$data->detail_nama_layanan,
                );
            }
        }
        return $detail;
    }

    function getDataPembayaran($email)
    {
        $data = $this->db->query("SELECT * nama_pendaftar, email_pendaftar, jumlah_bayar FROM pendaftar WHERE email_pendaftar='$email'");
        return $data->result();
    }
}

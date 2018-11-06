<?php
class Welcome_model extends CI_Model
{

    function getSertifikasi()
    {
        $query = $this->db->query("SELECT * FROM detail_layanan WHERE fk_id_layanan='2'");
        return $query;
    }

    function getPelatihan()
    {
        $query = $this->db->query("SELECT * FROM detail_layanan WHERE fk_id_layanan='1'");
        return $query;
    }
}
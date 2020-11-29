<?php
class artikel_model extends CI_Model
{
    /*View*/
    function user()
    {
        $query = $this->db->query("select * from artikel");
        return $query->result();
    }
}

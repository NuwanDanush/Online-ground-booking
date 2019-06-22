<?php
class displaymodel extends CI_Model
{
    function displaydata()
    {
        $query=$this->db->query("select * from users");
        return $query->result();
    }
}
?>
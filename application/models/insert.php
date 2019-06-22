<?php
class insert extends CI_Model 
{
 function save()
 {
    $data = array (
        'name'=>$this->input->post('name',TRUE),
        'nic'=>$this->input->post('nic',TRUE),
        'address'=>$this->input->post('address',TRUE),
        'phone'=>$this->input->post('phone',TRUE),
        'password'=>$this->input->post('password',TRUE)

    );
    return $this->db->insert('users',$data);
 }
}
?> 
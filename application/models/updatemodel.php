<?php
class updatemodel extends CI_Model

{
 function saverecords($id,$name,$nic,$address,$phone)
 {
 $query="insert into users values('','$name','$nic','$address','$phone')";
 $this->db->query($query);
 }
 
 function displayrecords()
 {
 $query=$this->db->query("select * from users");
 return $query->result();
 }
 
 function displayrecordsById($id)
 {
 $query=$this->db->query("select * from users where id='".$id."'");
 return $query->result();
 }
 
 function updaterecords($id,$name,$nic,$address,$phone)
 {
 $query=$this->db->query("update users SET name='$name',nic='$nic', address='$address', phone='$phone', where id='".$id."'");
 } 
 function update(){
     $id=$this->input->post('id',TRUE);
    $data = array (
        'name'=>$this->input->post('name',TRUE),
        'nic'=>$this->input->post('nic',TRUE),
        'address'=>$this->input->post('address',TRUE),
        'phone'=>$this->input->post('phone',TRUE)
    );
    $this->db->where('id',$id); 
    return $this->db->update('users',$data);
 }
}
?>
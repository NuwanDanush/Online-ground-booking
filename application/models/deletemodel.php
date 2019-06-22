<?php
class deletemodel extends CI_Model 
{
 function saverecords($name,$email,$mobile)
 {
 $query="insert into users values('','$name','$email','$mobile')";
 $this->db->query($query);
 }
 
 function displayrecords()
 {
 $query=$this->db->query("select * from users");
 return $query->result();
 }
 
 function deleterecords($id)
 {
 $this->db->query("delete  from users where id='".$id."'");
 } 
}
?> 
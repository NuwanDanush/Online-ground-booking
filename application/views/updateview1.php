<html>
<head>
<title>Registration form</title>
</head>
 
<body>
<?php
  foreach($data as $row)
  {
  ?>
 <form method="post" action="<?php echo base_url('index.php/update/updatedata1')?>">
 <table width="600" border="1" cellspacing="5" cellpadding="5">

 <tr>
    <td width="230">Enter Your ID </td>
    <td width="329"><input type="text" name="id" value="<?php echo $row->id; ?>"/></td>
  </tr>
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your NIC </td>
    <td><input type="text" name="nic" value="<?php echo $row->nic; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Address </td>
    <td><input type="text" name="address" value="<?php echo $row->address; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Phone</td>
    <td><input type="text" name="phone" value="<?php echo $row->phone; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
 <input type="submit" name="update" value="Update Records"/></td>
  </tr>
</table>
 </form>
 <?php } ?>
</body>
</html>
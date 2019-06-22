<html>
<head>
<title>Registration form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/create.css')?>">
</head>
<body>
<h1 align="center"> Update details </h1>
<table align="center" width="900" height="150" border="2" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>ID</th>
    <th>Name</th> 
    <th>NIC</th>
    <th>Address</th>
    <th>Phone</th>
 <th>Update</th>
  </tr>
  <?php
  
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->nic."</td>";
  echo "<td>".$row->address."</td>";
  echo "<td>".$row->phone."</td>";
  echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>
 
<body>

</body>
</html>
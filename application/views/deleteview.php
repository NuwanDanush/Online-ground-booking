<html>
<head>
<title>Display Records</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/create.css')?>">
</head>
 
<body>
<h1 align="center"> Delete details </h1>
<table align="center" width="900" height="150" border="2" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Id</th>
    <th>Name</th>
    <th>NIC</th>
    <th>Address</th>
    <th>Phone</th>
 <th>Delete</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->nic."</td>";
  echo "<td>".$row->address."</td>";
  echo "<td>".$row->phone."</td>";
  echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>
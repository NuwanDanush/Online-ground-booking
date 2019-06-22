
<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/create.css')?>">
</head>
 
<body>
<h1 align="center"> Display details </h1>
<table align="center" width="900" height="150" border="2" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Id</th>
    <th>name</th>
    <th>nic</th>
    <th>address</th>
    <th>phone</th>
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
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>
</html
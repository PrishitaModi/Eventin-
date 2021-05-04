<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM invitationform");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>INVITATION</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>TITLE</td>
    <td>DATE</td>
    <td>VENUE</td>
    <td>TIME</td>
    <td>THEME</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["title"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["venue"]; ?></td>
    <td><?php echo $row["theme"]; ?></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
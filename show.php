<html>
<head>
<title>˗ ˏˋITF LABˎˊ˗</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'pimpimchanok119.mysql.database.azure.com', 'Pimchanok119@pimpimchanok119', 'PPNuro26', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table-dark width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <button type="button" class="btn btn-warning">EDIT</button><button type="button" class="btn btn-danger">DELETE</button>
    <html>

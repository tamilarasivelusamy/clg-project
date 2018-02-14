		<?php
include('admin/connect.php');
$get_id=$_GET['id'];

mysql_query("delete from dic where word='$word'")or die(mysql_error());
header('location:dic.php');

?>
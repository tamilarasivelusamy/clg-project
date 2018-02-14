<?php
include('admin/connect.php');
$get_id = $_POST['file_id'];
$class_id=$_POST['class_id'];

mysql_query("delete from files where file_id='$get_id'") or die(mysql_error());
?>


<script type="text/javascript">
    window.location="class.php<?php echo '?id=' . $class_id; ?>";                          
</script>



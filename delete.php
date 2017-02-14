<html>
<style type="text/css">
td
{
padding:5px;
border:1px solid #ccc;

}
</style>
<body>
<?php
include('config.php');
if(isset($_GET['rollno']))
{
$rollno=$_GET['rollno'];
$query1=mysql_query("delete from sample where rollno='$rollno'");
if($query1)
{
header('location:list.php');
}
}
?>
</body>
</html>
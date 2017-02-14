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
$id=$_GET['rollno'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$dept=$_POST['dept'];
$year=$_POST['year'];
$query3=mysql_query("update sample set name='$name', dept='$dept', year='$year' where rollno='$rollno'");
if($query3)
{
header('location:list.php');
}
}
$query1=mysql_query("select * from sample where rollno='$rollno'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Name:<input type="text" name="name" value=""> <?php echo $query2['name']; ?><br />
Dept:<input type="text" name="dept" value=""> <?php echo $query2['dept']; ?> <br /><br />
Year:<input type="text" name="dept" value=""> <?php echo $query2['year']; ?> <br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>
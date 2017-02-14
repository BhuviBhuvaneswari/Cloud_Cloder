<html>

<body>
<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=mysql_real_escape_string($_POST['name']);
$rollno=mysql_real_escape_string($_POST['rollno']);
$dept=mysql_real_escape_string($_POST['dept']);
$year=mysql_real_escape_string($_POST['year']);
$query1=mysql_query("insert into sample values('$name','$rollno','$dept','$year')");
echo "insert into sample values('$name','$rollno','$dept','$year')";
if($query1)
{
header("location:list.php");
}
}
?>
<fieldset style="width:300px;">
<form method="post" action="list.php">
<table><ul>
<td><tr>
Name: <input type="text" name="name"><br></tr>
</td><td><tr>
Rollno: <input type="text" name="rollno"><br></tr>
</td><td><tr>
Department: <input type="text" name="dept"><br></tr>
</td><td><tr>
Year: <input type="text" name="year"><br></tr>
</td>
<br><ul>
<input type="submit" name="submit">
</table>
</form>
</fieldset>
</body>
</html>
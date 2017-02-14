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
$query1=mysql_query("select name, dept, year, rollno from sample");
?>
<table><tr><td>Name</td><td>dept</td><td>year</td><td>rollno</td>
<?php
while($query2=mysql_fetch_array($query1))
{
?><tr><td><?php$query2['name']?></td>
<td><?php$query2['dept']?></td>
<td><?php$query2['year']?></td>
<td><?php$query2['rollno']?></td>
<td><a href=edit.php?rollno=<?php$query2['rollno']?>Edit</a></td>
<td><a href=delete.php?rollno=<?php$query2['rollno']?>x</a></td><tr>
<?php;
}
?>

</ol>
</table>
</body>
</html>
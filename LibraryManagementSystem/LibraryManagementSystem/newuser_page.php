<?php
error_reporting(E_ERROR | E_PARSE);
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
$res="SELECT * FROM `cwh_database`.`admin_add`;";
while($rows=mysqli_fetch_assoc($res))
{
?>
<tr>
    <td><?php echo $rows['book_id'];?></td>
    <td><?php echo $rows['book_name'];?></td>
    <td><?php echo $rows['author'];?></td>
    <td><?php echo $rows['no_of_pages'];?></td>
    <td><?php echo $rows['category'];?></td>
</tr>
<?php
}
?>
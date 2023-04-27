<?php
error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect("localhost","root","");
$username=$_POST["username"];
$password=$_POST["password"];
$insrt="INSERT INTO `cwh_database`.`users` (`username`, `password`) VALUES ('$username', '$password');";
$insrted=$con->query($insrt);
    $resl="SELECT * FROM `cwh_database`.`admin_add`;";
    $result=$con->query($resl);
?>
    <h1>Welcome new user to AU digital Library!!</h1>
    <h2>Available books are</h2>
    <table border="1">
    <tr>
        <th>book_id</th>
        <th>book_name</th>
        <th>author</th>
        <th>no_of_pages</th>
        <th>category</th>
    </tr>
<?php
    while($row=mysqli_fetch_assoc($result))
    {
?>
    <tr>
        <td><?php echo $row['book_id'];?></td>
        <td><?php echo $row['book_name'];?></td>
        <td><?php echo $row['author'];?></td>
        <td><?php echo $row['no_of_pages'];?></td>
        <td><?php echo $row['category'];?></td>
    </tr>
<?php
    }
?>
</table>
<br><br>
<p>enter book id to add to your list</p>
<form action="register_user.php" method="post">
<input type="text" name="newbook">
<button class="btn">add book</button>
</form>
<?php
$bid=$_POST["newbook"];
//$rec="SELECT * FROM `cwh_database`.`admin_add` WHERE `book_name`='$bname';";
$rec="INSERT INTO `cwh_database`.`newuser_table` SELECT * FROM `cwh_database`.`admin_add` WHERE `book_id`='$bid';";
$recres=$con->query($rec);
/*$record=mysqli_fetch_assoc($recres);
$book_id=$recres['book_id'];
$book_name=$recres['book_name'];
$author=$recres['author'];
$no_of_pages=$recres['no_of_pages'];
$category=$recres['category'];
$in="INSERT INTO `cwh_database`.`newuser_table` (`book_id`, `book_name`, `author`, `no_of_pages`, `category`) VALUES ('$book_id', '$book_name', '$author', '$no_of_pages','$category');";
$inres=$con->query($in);*/
?>
<table border="1">
<tr>
    <!---<th>book_id</th>--->
    <th>book_name</th>
    <th>author</th>
    <th>no_of_pages</th>
    <th>category</th>
</tr>  

<?php
$tot="SELECT * FROM `cwh_database`.`newuser_table`;";
$tottable=$con->query($tot);
$c=0;
    while($recrow=mysqli_fetch_assoc($tottable))
    {
        if($c==0)
        {
            $c++;
        }
        else
        {
?>
    <tr>
       <!--- <td><?php echo $recrow['book_id'];?></td>--->
        <td><?php echo $recrow['book_name'];?></td>
        <td><?php echo $recrow['author'];?></td>
        <td><?php echo $recrow['no_of_pages'];?></td>
        <td><?php echo $recrow['category'];?></td>
    </tr>
<?php
        }
    }
?>


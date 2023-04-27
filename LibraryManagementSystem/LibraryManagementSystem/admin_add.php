<?php
error_reporting(E_ERROR | E_PARSE);
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
?>
<?php
$q="SELECT * FROM `cwh_database`.`admin_add`;";
$res=$con->query($q);
?>
<table border="1">
<tr>
    <th>book_id</th>
    <th>book_name</th>
    <th>author</th>
    <th>no_of_pages</th>
    <th>category</th>
<tr>
<?php
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
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <div class="container">
    
        <form action="admin_add.php" method="post"><br><br>
        book id:<br><input type="text" name="book_id"><br><br>
        book name:<br><input type="text" name="book_name"><br><br>
        author:<br><input type="text" name="author"><br><br>
        number of pages:<br><input type="number" name="no_of_pages"><br><br>
        category:<br><select name="category">
            <option value="CSE">CSE</option>
            <option value="CIVIL">CIVIL</option>
            <option value="MECH">MECH</option>
            <option value="IT">IT</option>
            <option value="AI">AI</option>
            <option value="AIML">AIML</option>
                </select><br><br>
        <button class="btn">add book</button>
        </form>
    </div>
    </body>
</html>

<?php
    if(!$con)
    {
        die("connection to this database failed due to".mysqli_connect_error());
    }
        $book_id=$_POST["book_id"];
        $book_name=$_POST["book_name"];
        $author=$_POST["author"];
        $no_of_pages=$_POST["no_of_pages"];
        $category=$_POST["category"];
        $sql="INSERT INTO `cwh_database`.`admin_add` (`book_id`, `book_name`, `author`, `no_of_pages`, `category`) VALUES ('$book_id', '$book_name', '$author', '$no_of_pages','$category');";
        $exec=$con->query($sql);
        $q="SELECT * FROM `cwh_database`.`admin_add`;";
        $res=$con->query($q);
        if($exec)
        {
            header("Refresh:0");
        }
    $con->close();
?>
<?php


session_start();
$myusername = $_SESSION['username'];

?>
<h1><?php echo "Posts by:".$myusername."" ?></h1>

<?php
$servername = "classroom.cs.unc.edu";
$username = "psanka";
$password = "random123";
$dbname = "psankadb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

 $sql = "SELECT UserID FROM Users WHERE Username = '".$myusername ."'";
    
     $result = $conn->query($sql);
$userid;
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["StudentID"]."";
        $userid = $row["UserID"];
    }
 $sql = "SELECT * FROM Posts p WHERE p.UserID =".$userid;
    echo "I made it here";
     $result = $conn->query($sql);

if ($result->num_rows > 0): ?>
<table>
    <tr>
        <td>Title</td>
        <td>Description</td>
        <td>Price</td>
        <td>Phone Number</td>
        <td>Category</td>
        <td>Picture</td>
        
    </tr>
    
       <?php while($row = $result->fetch_assoc()): ?> 
    <tr>
        <td><a href="<?php print ("viewpost.php?id=".$row["PostID"]."")?>"><?php echo "".$row["Title"].""; ?></a></td>
        <td><?php echo "" . $row["Description"].""; ?></td>
        <td><?php echo "" . $row["Price"].""; ?></td>
        <td><?php echo "" . $row["PhoneNumber"].""; ?></td>
        <td><?php 
            $picture = $row["Picture"];
             $categoryID = $row["CategoryID"];
             $sql = "SELECT CategoryName FROM Categories WHERE CategoryID = '".$categoryID ."'";
    $category_name;
     $catresult = $conn->query($sql);
        while($row = $catresult->fetch_assoc()) {
        $category_name = $row["CategoryName"];
    }
        echo "" . $category_name.""; ?></td>
        <td><img src="<?php print ("" . $picture."")?>"></td>
        
    </tr>
    <?php endwhile; ?>
</table>
<?php endif;

    // output data of each row
   // while($row = $result->fetch_assoc()) {
     //   echo "title " . $row["Title"]."";

//        $title = $row["Title"];
//        $description = $row["Description"];
//        $price = $row["Price"];
//        
//    }
//    
//    }


    ?>
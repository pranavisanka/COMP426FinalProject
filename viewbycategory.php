<?php


$category = $_GET['category'];
?>
<h1><?php echo "".$category."" ?></h1>

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

 $sql = "SELECT CategoryID FROM Categories WHERE CategoryName = '".$category ."'";
    
     $result = $conn->query($sql);
$categoryid;
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["StudentID"]."";
        $categoryid = $row["CategoryID"];
    }
 $sql = "SELECT * FROM Posts p WHERE p.CategoryID =".$categoryid;
    echo "I made it here";
     $result = $conn->query($sql);

if ($result->num_rows > 0): ?>
<table>
    <tr>
        <td>Title</td>
        <td>Description</td>
        <td>Price</td>
        <td>Phone Number</td>
        <td>Username</td>
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
             $userID = $row["UserID"];
             $sql = "SELECT UserName FROM Users WHERE UserID = '".$userID ."'";
    $user_name;
     $userresult = $conn->query($sql);
        while($row = $userresult->fetch_assoc()) {
        $user_name = $row["UserName"];
    }
        echo "" . $user_name.""; ?></td>
        <td><img src="<?php echo "" . $picture.""; ?>"></td>
        
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
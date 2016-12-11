<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css" />
</head>
<body>
  <p><?php
		session_start();
  print('Welcome '.$_SESSION['username']);
  echo'<a href="firstpage.php">Logout</a>';
  ?></p>
  
  
  Search<input type="text" id="search">
  Username:<input type="text" id="userName">
  Password:<input type="text" id="password">
<a href= "http://wwwp.cs.unc.edu/Courses/comp426-f16/users/psanka/finalproject/viewbycategory.php?category=furniture">Furniture</a>
<a href="http://www.w3schools.com/html/">Sublease</a>
<a href="http://www.w3schools.com/html/">Furniture</a>
<a href="http://www.w3schools.com/html/">Furniture</a>
<a href="http://www.w3schools.com/html/">Furniture</a>
<a href="http://www.w3schools.com/html/">Furniture</a>
  <table>
    <tr>
      <td id="Furniture">furniture img</td>
        
      <td id="Sublease">sublease img</td>
      <td id="Textbooks">textbook img</td>
    </tr>
      <td id="Tutors">tutoring img</td>
      <td id="Clothes">clothing img</td>
      <td id="Other">other img</td>
    <tr>
    </tr>
  </table>

  <p>This is where our home page will be located. From the home page, you can navigate to the results page and the create a post page.</p>
</body>
</html>
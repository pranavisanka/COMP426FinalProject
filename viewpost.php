 <html>
<body>
<?php include 'viewpostbyid.php' ?>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td>
<font face="Arial, Helvetica, sans-serif">Title</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Description</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Price</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Category</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Phone Number</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Username</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Picture</font>
</td>
</tr>

<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $title; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $description; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $price; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $category_name; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $phonenumber; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $user_name; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><img src="<?php echo $picture; ?>"></font>
</td>
</tr>
</body>
</html>
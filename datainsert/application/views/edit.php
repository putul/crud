<!DOCTYPE html>
<html>
<head>
<title>Create Contact Form Using CodeIgniter</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="http://localhost:81/CodeIgniter/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">

<h1>Contact Form</h1>
<form class="row" method="post" action="<?php echo base_url()?>home/update" >
    <label>Name:</label>
<input id="name" type="text"  name="name" value="<?php echo $query['name']; ?>"><br><br>
 <label>email:</label>
<input id="email" type="text"  name="email" value="<?php echo $query['email']; ?>"><br><br>
 <label>Mobile:</label>
<input id="mobile" type="text"  name="mobile" value="<?php echo $query['mobile']; ?>"><br><br>
 <label>Address:</label>
<input id="address" type="text"  name="address" value="<?php echo $query['address']; ?>"><br><br>
<input type="submit" name="submit" value="Submit"> 
</form>



</div>
</body>
</html>




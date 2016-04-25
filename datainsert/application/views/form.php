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
<form class="row" method="post" action="<?php echo base_url()?>home/data_insert" >
    <label>Name:</label>
<input id="name" type="text" value="" name="name"><br><br>
 <label>email:</label>
<input id="email" type="text" value="" name="email"><br><br>
 <label>Mobile:</label>
<input id="mobile" type="text" value="" name="mobile"><br><br>
 <label>Address:</label>
<input id="address" type="text" value="" name="address"><br><br>
<input type="submit" name="submit" value="Submit"> 
</form>



</div>
</body>
</html>




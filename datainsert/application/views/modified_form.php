<div id="container">

<h1>Contact Form</h1>
<form class="row" method="post"  action="<?php echo base_url()?>home/data_insertedit/<?php echo $row->id; ?>">
<label>Name:</label>
<input  type="text" name="name" value="<?php echo $query['name']; ?>" ><br><br>
 <label>email:</label>
<input  type="text" name="email" value="<?php echo $query['email']; ?>" ><br><br>
 <label>Mobile:</label>
<input  type="text" name="mobile" value="<?php echo $query['mobile']; ?>" ><br><br>
 <label>Address:</label>
<input id="address" type="text" name="address" value="<?php echo $query['address']; ?>" ><br><br>
<input type="submit" name="submit" value="Submit"> 
</form>
</div>


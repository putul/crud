
<div id="container">

<h1>Contact Form</h1>
<div class="row">		
<table width="100%" border="5" cellspacing="5" cellpadding="5">
    <thead>
          <tr>
              <td><b>
            Id
        </b></td>
        <td><b>
            Name
        </b></td>
        <td><b>
            E-mail
        </b></td>
        <td><b>
            Mobile
        </b></td> 
        <td><b>
         Address
        </b></td> 
       
          <td><b>
            Action
        </b></td>
          <td><b>
            Action
        </b></td>
    </tr>
    </thead>
  
    <tbody>
        <?php foreach ($query as $row): ?>
            <tr> 
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->mobile; ?></td>
                <td><?php echo $row->address; ?></td>
             
                <td><a href="<?php echo base_url()?>home/edit_info/<?php echo $row->id; ?>">Edit</a></td>
                <td><a href="<?php echo base_url()?>home/delete_info/<?php echo $row->id; ?>">Delete</a></td>

            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</div>
</div>

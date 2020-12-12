<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Owners Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('owner/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Owner Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Street</th>
						<th>City</th>
						<th>Parish</th>
						<th>Phone 1</th>
						<th>Phone 2</th>
						<th>Email Address</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($owners as $o){ ?>
                    <tr>
						<td><?php echo $o['owner_id']; ?></td>
						<td><?php echo $o['first_name']; ?></td>
						<td><?php echo $o['last_name']; ?></td>
						<td><?php echo $o['street']; ?></td>
						<td><?php echo $o['city']; ?></td>
						<td><?php echo $o['parish']; ?></td>
						<td><?php echo $o['phone_1']; ?></td>
						<td><?php echo $o['phone_2']; ?></td>
						<td><?php echo $o['email_address']; ?></td>
						<td>
                            <a href="<?php echo site_url('owner/edit/'.$o['owner_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('owner/remove/'.$o['owner_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

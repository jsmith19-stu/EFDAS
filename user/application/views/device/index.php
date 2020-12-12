<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Devices Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('device/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Device Id</th>
						<th>Owner Id</th>
						<th>Device Type</th>
						<th>Device Sn</th>
						<th>Device Other</th>
						<th>Device Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($devices as $d){ ?>
                    <tr>
						<td><?php echo $d['device_id']; ?></td>
						<td><?php echo $d['owner_id']; ?></td>
						<td><?php echo $d['device_type']; ?></td>
						<td><?php echo $d['device_sn']; ?></td>
						<td><?php echo $d['device_other']; ?></td>
						<td><?php echo $d['device_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('device/edit/'.$d['device_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('device/remove/'.$d['device_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Alerts Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('alert/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Alert Id</th>
						<th>Owner Id</th>
						<th>Device Id</th>
						<th>Risk Level</th>
						<th>Alert Date</th>
						<th>Alert Time</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($alerts as $a){ ?>
                    <tr>
						<td><?php echo $a['alert_id']; ?></td>
						<td><?php echo $a['owner_id']; ?></td>
						<td><?php echo $a['device_id']; ?></td>
						<td><?php echo $a['risk_level']; ?></td>
						<td><?php echo $a['alert_date']; ?></td>
						<td><?php echo $a['alert_time']; ?></td>
						<td>
                            <a href="<?php echo site_url('alert/edit/'.$a['alert_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('alert/remove/'.$a['alert_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

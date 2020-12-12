<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Device Edit</h3>
            </div>
			<?php echo form_open('device/edit/'.$device['device_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="owner_id" class="control-label">Owner Id</label>
						<div class="form-group">
							<input type="text" name="owner_id" value="<?php echo ($this->input->post('owner_id') ? $this->input->post('owner_id') : $device['owner_id']); ?>" class="form-control" id="owner_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="device_type" class="control-label">Device Type</label>
						<div class="form-group">
							<input type="text" name="device_type" value="<?php echo ($this->input->post('device_type') ? $this->input->post('device_type') : $device['device_type']); ?>" class="form-control" id="device_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="device_sn" class="control-label">Device Sn</label>
						<div class="form-group">
							<input type="text" name="device_sn" value="<?php echo ($this->input->post('device_sn') ? $this->input->post('device_sn') : $device['device_sn']); ?>" class="form-control" id="device_sn" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="device_other" class="control-label">Device Other</label>
						<div class="form-group">
							<input type="text" name="device_other" value="<?php echo ($this->input->post('device_other') ? $this->input->post('device_other') : $device['device_other']); ?>" class="form-control" id="device_other" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="device_description" class="control-label">Device Description</label>
						<div class="form-group">
							<textarea name="device_description" class="form-control" id="device_description"><?php echo ($this->input->post('device_description') ? $this->input->post('device_description') : $device['device_description']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
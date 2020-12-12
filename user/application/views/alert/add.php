<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Alert Add</h3>
            </div>
            <?php echo form_open('alert/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="owner_id" class="control-label">Owner Id</label>
						<div class="form-group">
							<input type="text" name="owner_id" value="<?php echo $this->input->post('owner_id'); ?>" class="form-control" id="owner_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="device_id" class="control-label">Device Id</label>
						<div class="form-group">
							<input type="text" name="device_id" value="<?php echo $this->input->post('device_id'); ?>" class="form-control" id="device_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="risk_level" class="control-label">Risk Level</label>
						<div class="form-group">
							<input type="text" name="risk_level" value="<?php echo $this->input->post('risk_level'); ?>" class="form-control" id="risk_level" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alert_date" class="control-label">Alert Date</label>
						<div class="form-group">
							<input type="text" name="alert_date" value="<?php echo $this->input->post('alert_date'); ?>" class="has-datepicker form-control" id="alert_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alert_time" class="control-label">Alert Time</label>
						<div class="form-group">
							<input type="text" name="alert_time" value="<?php echo $this->input->post('alert_time'); ?>" class="form-control" id="alert_time" />
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
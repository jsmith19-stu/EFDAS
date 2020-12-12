<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Owner Edit</h3>
            </div>
			<?php echo form_open('owner/edit/'.$owner['owner_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="first_name" class="control-label">First Name</label>
						<div class="form-group">
							<input type="text" name="first_name" value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : $owner['first_name']); ?>" class="form-control" id="first_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_name" class="control-label">Last Name</label>
						<div class="form-group">
							<input type="text" name="last_name" value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : $owner['last_name']); ?>" class="form-control" id="last_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street" class="control-label">Street</label>
						<div class="form-group">
							<input type="text" name="street" value="<?php echo ($this->input->post('street') ? $this->input->post('street') : $owner['street']); ?>" class="form-control" id="street" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $owner['city']); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="parish" class="control-label">Parish</label>
						<div class="form-group">
							<input type="text" name="parish" value="<?php echo ($this->input->post('parish') ? $this->input->post('parish') : $owner['parish']); ?>" class="form-control" id="parish" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone_1" class="control-label">Phone 1</label>
						<div class="form-group">
							<input type="text" name="phone_1" value="<?php echo ($this->input->post('phone_1') ? $this->input->post('phone_1') : $owner['phone_1']); ?>" class="form-control" id="phone_1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone_2" class="control-label">Phone 2</label>
						<div class="form-group">
							<input type="text" name="phone_2" value="<?php echo ($this->input->post('phone_2') ? $this->input->post('phone_2') : $owner['phone_2']); ?>" class="form-control" id="phone_2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_address" class="control-label">Email Address</label>
						<div class="form-group">
							<input type="text" name="email_address" value="<?php echo ($this->input->post('email_address') ? $this->input->post('email_address') : $owner['email_address']); ?>" class="form-control" id="email_address" />
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
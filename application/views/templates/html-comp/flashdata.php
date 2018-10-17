	<?php if($this->session->flashdata('success')): ?>
	  <div class="alert alert-success mb-3">
	  	<span class="nav-icon"><em class="icon-ios-checkmark-outline icon-lg"></em></span> &nbsp <?php echo $this->session->flashdata('success'); ?>
	  </div>
	<?php endif; ?>
	<?php if($this->session->flashdata('warning')): ?>
	  <div class="alert alert-warning mb-3">
	  	<span class="nav-icon"><em class="icon-ios-information-outline icon-lg"></em></span> &nbsp <?php echo $this->session->flashdata('warning'); ?>
	  </div>
	<?php endif; ?>
	<?php if($this->session->flashdata('danger')): ?>
	  <div class="alert alert-danger mb-3">
	  	<span class="nav-icon"><em class="icon-ios-close-outline icon-lg"></em></span> &nbsp <?php echo $this->session->flashdata('danger'); ?>
	  </div>
	<?php endif; ?>
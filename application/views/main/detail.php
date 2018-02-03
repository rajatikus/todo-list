	<div class="col-md-9">
		<?php if ( $this->session->flashdata('status') ) { ?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<?php echo $this->session->flashdata('status') ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
		<?php } ?>
		<div class="panel <?php echo ($list['is_completed'] == 1) ? 'panel-success' : 'panel-primary' ; ?>">
		  <div class="panel-heading">
		    <h3 class="panel-title"><b><?php echo $list['title'] ?></b><b class="pull-right"> created on : <?php echo date('d M, Y', strtotime($list['date_created'])) ?></b></h3>
		  </div>
		  <div class="panel-body">
		    <?php echo $list['description'] ?>
		  </div>
		  <div class="panel-footer">
		  	<b> deadline on : <?php echo date('d M, Y', strtotime($list['date_due'])) ?></b>
		  <?php if ($list['is_completed'] == 1): ?>
		  	<b class="pull-right"> was completed on : <?php echo date('d M, Y', strtotime($list['date_complete'])) ?></b>
		  <?php endif ?>
		  	
		  </div>
		</div>
		
	</div>
</div>
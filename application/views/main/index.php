<?php if ($this->uri->segment(2) == 'completed'): ?>
	<h1>Completed List</h1>
<?php elseif ($this->uri->segment(2) == 'all'): ?>
	<h1>All List</h1>
<?php else: ?>
	<h1>To do List</h1>
<?php endif; ?>

<!-- Print out the message -->
<?php if ( $this->session->flashdata('status') ) { ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<?php echo $this->session->flashdata('status') ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>
<?php } ?>

<?php if( $list ) : ?>
	<?php foreach ($list as $data) : ?>
	<div class="media">
	  <div class="media-left">
	  	<?php 
	  		// If the complete date is fill, assign it to $_date if not we assign the due date
	  		$_date = isset($data['date_complete']) ? $data['date_complete'] : $data['date_due'];
	  	?>
	    <a href="<?php echo site_url('app/detail/').$data['id'] ?>" class="btn <?php echo ($data['is_completed'] == 1) ? 'btn-success' : 'btn-primary' ; ?>"><?php echo date('d', strtotime($_date)) ?><br>
	    	<span class="text-center"><?php echo date('M Y', strtotime($_date)) ?></span>
	    </a>
	  </div>
	  <div class="media-body">
	    <h4 class="media-heading"><a href="<?php echo site_url('app/detail/').$data['id'] ?>"><?php echo $data['title'] ?></a></h4>
	    <p> created on <?php echo date('d M, Y', strtotime($data['date_created'])); ?></p>
	  </div>
	</div>
	<?php endforeach; ?>
<?php else : ?>
	<h4>Empty list...</h4>
	<p>Would you mind to add list instead .. ?</p>
	<a class="btn btn-primary" href="<?php echo site_url('app/add/') ?>">Add Now!</a>
<?php endif; ?>
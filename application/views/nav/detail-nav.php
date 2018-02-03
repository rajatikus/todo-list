<div class="row">
	<div class="col-md-3">
		<ul class="nav nav-stacked">
			<?php if ($list['is_completed'] == 0) :?>
				<li><a onclick="return confirm('Mark this list (<?php echo $list['title'] ?>) as complete ?')" href="<?php echo site_url('app/mark/').$list['id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Mark as Complete</a></li>
			<?php endif; ?>
			<li><a href="<?php echo site_url('app/edit/').$list['id'] ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit this list</a></li>
			<li><a onclick="return confirm('Delete this list (<?php echo $list['title'] ?>) ?')" href="<?php echo site_url('app/delete/').$list['id'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete this list</a></li>
		</ul>
	</div>

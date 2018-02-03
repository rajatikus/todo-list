<a class="pull-right btn btn-primary" href="<?php echo site_url('app/detail/').$list['id'] ?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back</a>
<h2>Edit list "<?php echo $list['title'] ?>"</h2>

<?php echo form_open('app/add_edit_process') ?>
<input type="hidden" name="id" value="<?php echo $list['id'] ?>">
<div class="form-group">
	<label>Title</label>
	<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $list['title'] ?>">
	<?php echo form_error('title') ?>
</div>
<div class="form-group">
	<label>Description</label>
	<textarea class="form-control" name="desc" cols="40" rows="10">
		<?php echo $list['description'] ?>
	</textarea>
	<?php echo form_error('desc') ?>
</div>
<div class="form-group">
	<label>Deadline</label>
	<input type="text" name="due" placeholder="Due date" id="due" value="<?php echo date('d-m-Y', strtotime($list['date_due'])) ?>">
	<?php echo form_error('due') ?>
</div>
	<button class="btn btn-primary" type="submit" name="submit"><span class="glyphicon glyphicon-save" aria-hidden="true"></span> Save</button>
</form>
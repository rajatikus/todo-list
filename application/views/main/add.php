<a class="pull-right btn btn-primary" href="<?php echo site_url() ?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back</a>
<h2>Add new list</h2>

<?php echo form_open('app/add_edit_process') ?>
<div class="form-group">
	<label>Title</label>
	<input type="text" name="title" class="form-control" placeholder="Title">
	<?php echo form_error('title') ?>
</div>
<div class="form-group">
	<label>Description</label>
	<textarea class="form-control" name="desc" cols="40" rows="10">
	</textarea>
	<?php echo form_error('desc') ?>
</div>
<div class="form-group">
	<label>Deadline</label>
	<input type="text" name="due" placeholder="Due date" id="due">
	<?php echo form_error('due') ?>
</div>
	<button class="btn btn-primary" type="submit" name="submit"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
</form>
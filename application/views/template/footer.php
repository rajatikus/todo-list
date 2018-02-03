
</div>
	<script type="text/javascript">
		<?php if( isset($require_jquery_ui) ) :?>
			<?php if( $require_jquery_ui ) : ?>
				$('#due').datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: 'dd-mm-yy'
					// showOn: 'button',
					// buttonText: '<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>'
				});
				tinymce.init({
					selector: 'textarea',
					menubar: ""
				});
			<?php endif; ?>
		<?php endif; ?>
	</script>
</body>
</html>
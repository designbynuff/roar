<?php theme_include('partials/header'); ?>

	<h3>Create a new topic</h3>
	<p>This will be posted in <a href="<?php echo forum_url(); ?>"><?php echo forum_title(); ?></a></p>

	<?php echo Form::open(topic_create_url()); ?>

	<fieldset>
		<legend>Create topic</legend>

		<p><label>Title<br>
		<?php echo Form::input('title'); ?></label></p>

		<p><label>Short Description<br>
		<?php echo Form::textarea('description'); ?></label></p>

		<p><label>Post<br>
		<?php echo Form::textarea('post'); ?></label></p>

		<?php echo Form::submit('submit', 'Submit'); ?>
	</fieldset>

	<?php echo Form::close(); ?>

<?php theme_include('partials/footer'); ?>
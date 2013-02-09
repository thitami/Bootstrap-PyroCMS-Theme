<h2 class="page-title"><?php echo lang('user_reset_password_title');?></h2>

<?php if(!empty($error_string)):?>
	<div class="alert-message error">
		<?php echo $error_string;?>
	</div>
<?php endif;?>

<?php if(!empty($success_string)): ?>
	<div class="alert-message success">
		<?php echo $success_string; ?>
	</div>
<?php else: ?>

	<?php echo form_open('users/reset_pass', array('id'=>'reset-pass', 'class'=>'form-stacked')); ?>
	
	<h4 class="reset-instructions"><?php echo lang('user_reset_instructions'); ?></h4>

			<label for="email"><?php echo lang('user_email') ?></label>
			<input type="text" name="email" maxlength="100" value="<?php echo set_value('email'); ?>" />

			<label for="user_name"><?php echo lang('user_username') ?></label>
			<input type="text" name="user_name" maxlength="40" value="<?php echo set_value('user_name'); ?>" />
            
            <div class='actions'>
			<?php echo form_submit(array('name'=>'btnSubmit', 'class'=>'btn'), lang('user_reset_pass_btn')) ?>
      	   </div>

	<?php echo form_close(); ?>
	
<?php endif; ?>
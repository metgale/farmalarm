<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Task', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Task')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('user_id', array(
					'required' => 'required',
					)
				);
				echo $this->BootstrapForm->input('title', array(
					'required' => 'required',
					)
				);
				echo $this->BootstrapForm->input('completed', array(
					'required' => false,
					)
				);
				echo $this->BootstrapForm->input('information', array(
					'required' => 'required',
					)
				);
				echo $this->BootstrapForm->input('repeating', array(
					'required' => false)
				);
				echo $this->BootstrapForm->input('deadline', array(
					'required' => 'required',
					)
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>
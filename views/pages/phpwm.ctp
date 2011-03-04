<h2>CakePHP Basics</h2>

<h3><?php __('Setup - Getting ready') ?></h3>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Bake', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'pages',
					'action' => 'bake'
				)
			)
		);
	?>
</p>

<h3><?php __('Bake - Code Generation') ?></h3>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Generating the code', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'conventions',
					'action' => 'home'
				)
			)
		);
	?>
</p>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Conventions', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'conventions',
					'action' => 'index'
				)
			)
		);
	?>
</p>
<p>
	<?php
		echo sprintf(
			'<span class="notice">%s %s</span>',
			__('Non Conventions', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'non_conventions',
					'action' => 'index'
				)
			)
		);
	?>
</p>

<h2>CakePHP - Real Life Stuff</h2>

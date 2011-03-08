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
				),
				array(
					'target' => '_blank'
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
				),
				array(
					'target' => '_blank'
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
				),
				array(
					'target' => '_blank'
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
				),
				array(
					'target' => '_blank'
				)
			)
		);
	?>
</p>

<h3><?php __('Bake - Relations') ?></h3>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Linking things together', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'things',
					'action' => 'index'
				),
				array(
					'target' => '_blank'
				)
			)
		);
	?>
</p>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Saving multi rows', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'things',
					'action' => 'save_all'
				),
				array(
					'target' => '_blank'
				)
			)
		);
	?>
</p>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Saving related data', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'things',
					'action' => 'save_related'
				),
				array(
					'target' => '_blank'
				)
			)
		);
	?>
</p>

<h2>CakePHP - Real Life Stuff</h2>

<h3><?php __('Datasources') ?></h3>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Fetching any data', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'pages',
					'action' => 'display',
					'reader_source'
				),
				array(
					'target' => '_blank'
				)
			)
		);
	?>
</p>

<h3><?php __('Data integrity') ?></h3>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Stop saving over my work', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'pages',
					'action' => 'display',
					'lockable'
				),
				array(
					'target' => '_blank'
				)
			)
		);
	?>
</p>

<h3><?php __('Debuging') ?></h3>
<p><span class="notice success">DebugKit -
	<?php
		echo $this->Html->link(
			'Info',
			'http://cakephp.lighthouseapp.com/projects/42880/home',
			array('target' => '_blank')
		);
	?></span>
</p>
<p><span class="notice success">DebugKit -
	<?php
		echo $this->Html->link(
			'Code',
			'http://github.com/cakephp/debug_kit',
			array('target' => '_blank')
		);
	?></span>
</p>

<h3><?php __('Profiling') ?></h3>
<p>
	<?php
		echo sprintf(
			'<span class="notice success">%s %s</span>',
			__('Xhprof', true),
			$this->Html->link(
				'->',
				array(
					'controller' => 'pages',
					'action' => 'display',
					'xhprof'
				),
				array(
					'target' => '_blank'
				)
			)
		);
	?>
</p>

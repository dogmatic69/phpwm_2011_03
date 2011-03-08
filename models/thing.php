<?php
	class Thing extends AppModel{
		public $name = 'Thing';

		public $belongsTo = array(
			'Convention',
			'PrettyName' => array(
				'className' => 'NonConvention',
				'foreignKey' => 'this_is_wrong'
			)
		);
	}
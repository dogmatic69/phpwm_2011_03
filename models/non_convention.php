<?php
	class NonConvention extends AppModel {
		var $name = 'NonConvention';
		var $useTable = 'nonConv3nti0n';
		var $primaryKey = 'non_convention_id';
		var $displayField = 'main_field';

		var $validate = array(
			'title' => array(
				'notempty' => array(
					'rule' => 'notempty',
					'message' => 'This field should not be blank'
				)
			),
			'date' => array(
				'date' => array(
					'rule' => 'date',
					'message' => 'nice date please'
				)
			)
		);

		function beforeValidate($options = array()) {
			$this->data[$this->alias]['date'] = sprintf('%d-%d-%d', $this->data[$this->alias]['date']['year'], $this->data[$this->alias]['date']['month'], $this->data[$this->alias]['date']['day']);
			return parent::beforeValidate($options);
		}

		function beforeSave($options = array()) {
			if($this->id || (isset($this->data[$this->alias][$this->primaryKey]) && $this->data[$this->alias][$this->primaryKey])){
				unset($this->data[$this->alias]['made']);
				$this->data[$this->alias]['changed'] = date('Y-m-d H:i:s');
			}
			else{
				$this->data[$this->alias]['made'] = $this->data[$this->alias]['changed'] = date('Y-m-d H:i:s');
			}
			
			return parent::beforeSave($options);
		}
	}
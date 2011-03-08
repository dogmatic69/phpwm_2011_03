<?php
class ThingsController extends AppController {

	var $name = 'Things';
	var $scaffold;

	public function save_all(){
		if(!empty($this->data)){
			foreach($this->data['Thing'] as $k => $thing){
				$data[$k]['Thing'] = $thing;
			}
			
			if($this->Thing->saveAll($data)){
				$this->Session->setFlash('Yey, it works');
				$this->redirect(array('action' => 'index'));
			}

			$this->Session->setFlash('its broken');
		}

		$this->set('conventions', $this->Thing->Convention->find('list'));
		$this->set('this_is_wrong', $this->Thing->PrettyName->find('list'));
	}

	public function save_related(){
		if(!empty($this->data)){
			if($this->Thing->saveAll($this->data)){
				$this->Session->setFlash('Yey, it works');
				$this->redirect(array('action' => 'index'));
			}

			$this->Session->setFlash('its broken');
		}
	}
}
?>
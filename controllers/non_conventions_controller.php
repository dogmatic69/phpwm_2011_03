<?php
class NonConventionsController extends AppController {

	var $name = 'NonConventions';

	var $uses = array('NonConvention');

	function index(){
		$this->set('nonConventions', $this->paginate());
	}

	function view($id = null){
		if(!$id){
			$this->Session->setFlash('meh, its broken');
			$this->redirect($this->referer());
		}

		$this->set('nonConvention', $this->NonConvention->read(null, $id));
	}

	function add(){
		if(!empty($this->data) && $this->NonConvention->save($this->data)){
			$this->Session->setFlash('Saved! \o/');
			$this->redirect(array('action' => 'index'));
		}
	}

	function edit($id = null){
		if(!$id && empty($this->data)){
			$this->Session->setFlash('Pick one please');
			$this->redirect($this->referer());
		}
		
		if(!empty($this->data) && $this->NonConvention->save($this->data)){
			$this->Session->setFlash('Saved! \o/');
			$this->redirect(array('action' => 'index'));
		}

		if(empty($this->data)){
			$this->data = $this->NonConvention->read(null, $id);
		}
	}

	function delete($id = null){
		if((int)$id > 0 && $this->NonConvention->delete($id)){
			$this->Session->setFlash('gone');
			$this->redirect(array('action' => 'index'));
		}

		$this->Session->setFlash('error deleting that');
		$this->redirect($this->referer());
	}
}
?>
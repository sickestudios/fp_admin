<?php
App::uses('AppController', 'Controller');
/**
 * Covers Controller
 *
 * @property Cover $Cover
 */
class CoversController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($language = null) {
		$this->Cover->recursive = 0;
		if (!empty($language)) {
			$this->paginate = array(
    	    	'order' => array('Cover.created'=>'desc'),
				'conditions' => array('Cover.language_id = '.$language.' OR Cover.language_id = 1'),
			
    		);
    		$this->loadModel('Review');
    		$this->Review->recursive = 0;
    		$arr_review = $this->Review->find('list',array('fields'=>array('Review.title','Review.status','Review.cover_id'),'conditions'=>array('Review.language_id'=>$language)));
    		$arr_review_code = $this->Review->find('list',array('fields'=>array('Review.cover_id','Review.id'),'conditions'=>array('Review.language_id'=>$language)));
    		//Debugger::dump($arr_review_code);
    		$this->set('current_language',$language);
    		$this->set('review_codes',$arr_review_code);
    		$this->set('reviews',$arr_review);
			$this->set('covers', $this->paginate('Cover'));			
		} else {
			$this->view = 'index_c';
			$this->paginate = array(
    	    	'order' => array('Cover.created'=>'desc'),
    		);
    		$this->set('covers', $this->paginate('Cover'));
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cover->id = $id;
		if (!$this->Cover->exists()) {
			throw new NotFoundException(__('Invalid cover'));
		}
		$this->set('cover', $this->Cover->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cover->create();
			if ($this->Cover->save($this->request->data)) {
				$this->Session->setFlash(__('The cover has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cover could not be saved. Please, try again.'));
			}
		}
		$languages = $this->Cover->Language->find('list');
		$categorytypes = $this->Cover->Categorytype->find('list');
		$this->set(compact('languages', 'categorytypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cover->id = $id;
		if (!$this->Cover->exists()) {
			throw new NotFoundException(__('Invalid cover'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cover->save($this->request->data)) {
				$this->Session->setFlash(__('The cover has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cover could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cover->read(null, $id);
		}
		$languages = $this->Cover->Language->find('list');
		$categorytypes = $this->Cover->Categorytype->find('list');
		$this->set(compact('languages', 'categorytypes'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Cover->id = $id;
		if (!$this->Cover->exists()) {
			throw new NotFoundException(__('Invalid cover'));
		}
		if ($this->Cover->delete()) {
			$this->Session->setFlash(__('Cover deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cover was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

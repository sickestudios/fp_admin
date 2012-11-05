<?php
App::uses('AppController', 'Controller');
/**
 * Reviews Controller
 *
 * @property Review $Review
 */
class ReviewsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Review->recursive = 0;
		$this->request->params['named'];
		if (array_key_exists('status', $this->request->params['named'])) {
			$this->paginate = array(
				'order' => 'Review.modified desc',
				'conditions' => array('Review.status'=>$this->request->params['named']['status']),
			);
		} else {
			$this->paginate = array(
				'order' => 'Review.created desc'
			);
		}
		
		$this->set('reviews', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		$this->set('review', $this->Review->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($cover_id=null) {
		$this->loadModel('Cover');
		$this->set('cover_data',$this->Cover->find('list',array('fields'=>array('Cover.title','Cover.image'),'conditions'=>array('Cover.id'=>$cover_id))));
		if(empty($cover_id)) {
			$this->redirect(array('controller'=>'covers','action' => 'index'));
		} else { 
			if ($this->request->is('post')) {
				$this->Review->create();
				if ($this->Review->save($this->request->data)) {
					$this->Session->setFlash(__('The review has been saved'));
					$this->redirect(array('controller'=>'covers','action' => 'index',$this->request->data['Review']['languageid'],'page'=>$this->request->data['Review']['pageid']));
				} else {
					$this->Session->setFlash(__('The review could not be saved. Please, try again.'));
				}
			}
			$languages = $this->Review->Language->find('list');
			$this->set(compact('languages'));
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Review->save($this->request->data)) {
				$this->Review->updateAll(
					array('Review.status '=>"'waiting-supervision'"),
					array('Review.id'=>$id)
				);
				$this->Session->setFlash(__('The review has been saved'));

				$this->redirect(array('controller'=>'covers','action' => 'index',$this->request->data['Review']['languageid'],'page'=>$this->request->data['Review']['pageid']));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Review->read(null, $id);
		}
		$languages = $this->Review->Language->find('list');
		$this->set(compact('languages'));
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
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->Review->delete()) {
			$this->Session->setFlash(__('Review deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Review was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function supervise($id = null) {
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Review->save($this->request->data)) {
				$this->Review->updateAll(
					array('Review.status '=>"'completed'"),
					array('Review.id'=>$id)
				);
				$this->Session->setFlash(__('The review has been updated'));
				$this->redirect(array('controller'=>'reviews','action' => 'index','status'=>'waiting-supervision'));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Review->read(null, $id);
		}
		$languages = $this->Review->Language->find('list');
		$this->set(compact('languages'));
	}
}
	
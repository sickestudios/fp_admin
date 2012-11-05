<?php
App::uses('AppController', 'Controller');
/**
 * Mails Controller
 *
 * @property Mail $Mail
 */
class MailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mail->recursive = 0;
		$this->paginate = array('limit'=>20,'order' => array('Mail.created' => 'desc'));
		$this->set('mails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Mail->id = $id;
		if (!$this->Mail->exists()) {
			throw new NotFoundException(__('Invalid mail'));
		}
		$this->set('mail', $this->Mail->read(null, $id));
		$this->Mail->updateAll(
				array('Mail.status' => 0),
				array('Mail.id'=>$id)
			);
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
		$this->Mail->id = $id;
		if (!$this->Mail->exists()) {
			throw new NotFoundException(__('Invalid mail'));
		}
		if ($this->Mail->delete()) {
			$this->Session->setFlash(__('Mail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

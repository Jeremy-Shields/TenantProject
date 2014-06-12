<?php
class TenantsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
    
    public function index()
    {
        //$this->redirect('Home/view');
        $this->render();
    }
    
    public function view($id)
    {
       if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $tenant = $this->Tenant->findById($id);
        if (!$tenant) {
            throw new NotFoundException(__('Invalid Tenant'));
        }
        $this->set('tenant', $tenant);
    }
    
    public function viewAll()
    {
        $this->set('tenants', $this->Tenant->find('all'));
    }
    
    public function add()
    {
        if ($this->request->is('post')) {
        //Added this line
        //$this->request->data['Post']['user_id'] = $this->Auth->user('id');
        if ($this->Tenant->save($this->request->data)) {
            $this->Session->setFlash(__('Your tenant has been saved.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    }
    
    public function Home() {

    }
    
    public function about()
    {
        $this->render();
    }
    
    public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = (int) $this->request->params['pass'][0];
        if ($this->Tenant->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}

}
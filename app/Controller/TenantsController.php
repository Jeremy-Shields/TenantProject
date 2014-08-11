<?php
class TenantsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
    
    public function index()
    {
        //$this->redirect('Home/view');
        $this->set('tenants', $this->Tenant->find('all'));
        if ($this->request->is('post')) 
        {
        //Added this line
        //$this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Tenant->save($this->request->data)) 
            {
                $this->Session->setFlash(__('Your tenant has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
        }
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
        $this->render();
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
    
    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid Tenant'));
    }

    $tenant = $this->Tenant->findById($id);
    if (!$tenant) {
        throw new NotFoundException(__('Invalid Tenant'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Tenant->id = $id;
        if ($this->Tenant->save($this->request->data)) {
            $this->Session->setFlash(__('Tenant has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update Tenant.'));
    }

    if (!$this->request->data) {
        $this->request->data = $tenant;
    }
}
    
    public function Home() {

    }
    
    public function search()
    {
        if ($this->request->is('post'))
        {
            $postData = $this->request->data;
            $this->set('postData', $postData);
           return $this->redirect(array('action' => 'index'));
            
            
        }
    }
    
    public function delete($id = null)
    {
        if ($id === null )
        {
            $this->Session->setFlash("There has been an error.Was un able to perfor a delete. Pelase try again");
            $this->render();
        }
        else
        {
            $this->Tenant->delete($id);
            $this->Session->setFlash("The item is now gone!");
        }
        

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
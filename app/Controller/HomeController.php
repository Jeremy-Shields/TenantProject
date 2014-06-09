<?php
class HomeController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
    
    
    
    public function index()
    {
        $this->redirect('Home/view');
    }
    
    public function view()
    {
        $this->render();
    }
    
    public function UserHome()
    {
        $this->render();
    }
    
    public function addTenant()
    {
        $this->render();
    }
    
    public function about()
    {
        $this->render();
    }
    

}


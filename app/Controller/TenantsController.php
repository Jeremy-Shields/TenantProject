<?php
class TenantsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
    
    public function index()
    {
        //$this->redirect('Home/view');
        $this->render();
    }
    
    public function view()
    {
        $this->render();
    }
    
    public function add()
    {
        $this->render();
    }
    
    public function Home() {

    }
    
    public function about()
    {
        $this->render();
    }
    

}
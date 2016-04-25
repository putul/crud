<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->view('form');
        
    }
     public function data_insert(){
         $this->load->model('first');
         $this->first->insert();
         echo "Data has been inserted";
         $this->load->view('form');
         
    }
    
     
    public function update(){
         $this->load->model('first');
         $this->first->entry_update();
         
         
    }
    
    public function data_show(){
        $data=array();
        $this->load->model('first');
        $data['query']=$this->first->edit();
        $this->load->view('form_show',$data);
    }
    public function edit_info($id) {
        $data=array();
        $this->load->model('first');
        $data['query']=$this->first->edit_list($id);
        $this->load->view('edit',$data);
       
      
    }
   public function delete_info($id){
       //$data=array();
       $this->load->model('first');
       $this->first->delete_list($id);
       //$this->load->model('first');
       $data['query']=$this->first->edit();
       $this->load->view('form_show',$data);
       
   }
   
}


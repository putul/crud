<?php

class First extends CI_Model {

    public function insert() {
        
        $this->load->database();
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
           'address' => $this->input->post('address') 
        );
        $this->db->insert('data', $data);
    }
      public function edit() {
          $this->load->database();
          $query = $this->db->query("Select * from data");
          return $query->result();
          
          
      }
      function edit_list($id){
            $this->load->database();
            $query = $this->db->query("Select * from data where id='$id'");
            return $query->row_array();
    }
    
    function entry_update() {
        
        
        $this->load->database();
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
           'address' => $this->input->post('address') 
        );
   
        $this->db->update('data', $data);
         

       
    }
     function delete_list($id){
           
             $this->db->where('id', $id);
             $this->db->delete('data');
             //$query = $this->db->query("Select * from data");
             //return $query->result();
             echo $this->db->last_query();
    }
   
}
?>
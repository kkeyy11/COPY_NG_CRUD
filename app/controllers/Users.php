<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users extends Controller {

    public function __construct(){
        parent:: __construct();
        $this->call->model('users_model');
    }

    public function read(){
        $data['userdata'] = $this->users_model->read();
        $this->call->view('/users/display', $data);

    }

    public function create(){
        if($this->form_validation->submitted()){

            $kmy_last_name = $this->io->post('kmy_last_name');
            $kmy_first_name = $this->io->post('kmy_first_name');
            $kmy_gender = $this->io->post('kmy_gender');
            $kmy_email = $this->io->post('kmy_email');
            $kmy_address = $this->io->post('kmy_address');

            $this->users_model->create($kmy_last_name, $kmy_first_name, $kmy_gender, $kmy_email, $kmy_address);
            redirect('users/display');

        }
       
        $this->call->view('/users/create');
        

    }

    public function update($id){
        if($this->form_validation->submitted()){

            $kmy_last_name = $this->io->post('kmy_last_name');
            $kmy_first_name = $this->io->post('kmy_first_name');
            $kmy_gender = $this->io->post('kmy_gender');
            $kmy_email = $this->io->post('kmy_email');
            $kmy_address = $this->io->post('kmy_address');

            $this->users_model->update($kmy_last_name, $kmy_first_name, $kmy_gender, $kmy_email, $kmy_address, $id);
            redirect('users/display');

        }
        $data['users'] = $this->users_model->get_one($id);
        $this->call->view('/users/update', $data);
       
    }

    public function delete($id){
        
        if ($this->users_model->delete($id)) {
            
            redirect('users/display');
        } else {
         
            redirect('users/display'); 
        }
    }
    

	
}
?>

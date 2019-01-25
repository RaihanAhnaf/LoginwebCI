<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

    public function registeruser()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('fname', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
    

    
    if ($this->form_validation->run() == TRUE) {
        //load model to connect to the database
        $this->load->model('model_user');
        $this->model_user->insertuser();

        $this->session->flashdata('succes','you are registered');
        
        redirect(home/Login);
    } else {
        $this->load->model('register_view');
        
    }
}
    

}

/* End of file register.php */
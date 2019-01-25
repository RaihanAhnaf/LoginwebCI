<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function loginUser()
    {
        
        $this->load->model('Model_user');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $data['title']='Login';
            
    
            $this->load->view('login/home_view',$data);
        } else {
            
            $username = $this->input->post('username');
            $password = sha1($this->input->post('password'));
    
            $where = array('username'=> $username,'password'=> $password);
    
            $cek =  $this->Model_user->checklogin($where);
    
            if ($cek > 0) {
                
                $data_session = array(
                    'status' => 'logged in'
                );
                
                $this->session->set_userdata( $data_session );
                
                redirect('Welcome/index');
            } else {
                $this->session->set_flashdata('pesan','Username atau password salah');

                redirect('Home/login');;
            }
        }
        
    }
    public function logout()
    {
        
        $this->session->sess_destroy();
        
        redirect('Home/login');
    }

}

/* End of file login.php */


?>
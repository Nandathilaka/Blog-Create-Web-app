<?php

class RegisterController extends CI_Controller{

  public function registerUser(){
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');

    if ($this->form_validation->run() == FALSE)
               {
                       $this->load->view('register');
               }
               else
               {
                       $this->load->Model('Model_User');
                       $response = $this->Model_User->inseruserdata();
                       if ($response) {
                         $this->session->set_flashdata('msg','Registered Successfully...Please Login');
                         redirect('Home/register');
                       }else{
                         $this->session->set_flashdata('msg','Somthing went to Wrong');
                         redirect('Home/register');
                       }
               }
  }


}

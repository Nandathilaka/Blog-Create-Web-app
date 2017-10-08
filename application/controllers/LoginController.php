<?php
/**
 * login coltroller class
 */
class LoginController extends CI_Controller{

  function loginUser(){
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE)
               {
                       $this->load->view('login');
               }
               else
               {
                      $this->load->Model('Model_User');
                      $result = $this->Model_User->loginuser();

                      if ($result !==FALSE) {
                        # session create...
                        $user_login = array(
                          'id' =>$result->id ,
                          'fname' =>$result->fname ,
                          'lname' =>$result->lname ,
                          'email' =>$result->email ,
                          'loggedin'=>TRUE,

                        );
                        $this->session->set_userdata($user_login);
                        $this->session->set_flashdata('welcome','Welcome back');
                        redirect('AdminController/index');


                      }else{
                        $this->session->set_flashdata('errmsg','Invalid Email and Password');
                        redirect('Home/login');
                      }

               }
  }
  public function logoutuser(){
    # sesiion erase...
    $this->session->unset_userdata('id');
    $this->session->unset_userdata('fname');
    $this->session->unset_userdata('lname');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('loggedin');
    redirect('Home/login');

  }
}

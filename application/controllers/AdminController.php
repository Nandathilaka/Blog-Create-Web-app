<?php
/**
 *
 */
class AdminController extends CI_Controller{

  function index(){
    $this->load->view('Admin/admin');
  }

  public function addpost(){
    $this->load->view('Admin/addpost');
  }

  public function viewpost()
  {
    $this->load->view('Admin/viewpost');
  }
}

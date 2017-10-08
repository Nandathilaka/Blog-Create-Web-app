<?php
/**
 *
 */
class Model_User extends CI_Model
{

  function inseruserdata(){
    # insert data...
    $data = array(
      'fname' => $this->input->post('fname','TRUE') ,
      'lname' => $this->input->post('lname','TRUE') ,
      'email' => $this->input->post('email','TRUE') ,
      'password' => sha1($this->input->post('password','TRUE'))
      );

      return $this->db->insert('users',$data);
  }

  public function loginuser(){
    $email = $this->input->post('email');
    $password = sha1($this->input->post('password'));

    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $respond = $this->db->get('users');

    if ($respond->num_rows() == 1) {
      return $respond->row(0);
    }else{
      return FALSE;
    }

  }
}

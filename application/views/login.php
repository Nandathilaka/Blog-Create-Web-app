<?php include 'patials/header.php' ?>




<div class="container">
  <h2>Login</h2>
  <?php
  if ($this->session->flashdata('errmsg')) {
    echo "<h3>".$this->session->flashdata('errmsg')."</h3>";
  }
   ?>
  <hr>
  <?php echo validation_errors(); ?>
  <?php echo form_open('LoginController/loginUser'); ?>

      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  <?php echo form_close(); ?>
</div>
</div>







<?php include 'patials/footer.php' ?>

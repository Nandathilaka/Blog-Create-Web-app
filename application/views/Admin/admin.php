<?php
include 'Include/header.php';

if ($this->session->flashdata('welcome')) {
  echo "<h3>".$this->session->flashdata('welcome')."</h3>";
}

 ?>



 <?php Include 'Include/footer.php'; ?>

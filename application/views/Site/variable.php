<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('includes/header.php')  ?>
    <h3>Name : <?=$name ?></h3>
    <h4>Email : <?=$email ?></h4>
    <h5>Phone : <?=$phone ?></h5>
    <h5>Message : <?=$message ?></h5>
<?php $this->load->view('includes/footer.php') ?>
<?php 
$sess = $this->session->userdata('id_user');
if (!$this->session->userdata('hak_akses')=='Login') {
	$this->load->view('page/login');
}
elseif ($this->session->userdata('hak_akses')=='Dashboard') {
	$this->load->view('page/dashboard');
} 
else { ?>
<?php $this->load->view('page/dashboard') ?>
<?php } ?>
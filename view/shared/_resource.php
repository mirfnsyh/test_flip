<?php 
require_once 'config/Config.php';

$addConfig = new Config();// add Config Setting

$config = $addConfig->ListConfig();

?>
<title>Flip Test</title>

<!-- Custom fonts for this template-->
<link href="<?php echo $config['base_url']; ?>res/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo $config['base_url']; ?>res/css/sb-admin-2.min.css" rel="stylesheet">

 <!-- Custom styles for this page -->
<link href="<?php echo $config['base_url']; ?>res/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript-->
<script src="<?php echo $config['base_url']; ?>res/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $config['base_url']; ?>res/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo $config['base_url']; ?>res/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo $config['base_url']; ?>res/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo $config['base_url']; ?>res/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo $config['base_url']; ?>res/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo $config['base_url']; ?>res/js/demo/datatables-demo.js"></script>

  <!-- Custom Js -->
  <script src="<?php echo $config['base_url']; ?>res/js/custom_popup.js"></script>

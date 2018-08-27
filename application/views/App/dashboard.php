<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pemasaran LP3I Kramat</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'assets/vendor/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.css'?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'assets/css/sb-admin.css'?>" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php $this->load->view('Layout/navbar'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

      <!-- Content -->
      <div>
        <div class="jumbotron">

          <b>Sejarah</b> : <br>
          - sadadsa <br>
          - ashduashduas

          <br><hr>

          <b>Visi</b> : <br>
          - sadadsa <br>
          - ashduashduas

          <br><hr>

          <b>Misi</b> : <br>
          - sadadsa <br>
          - ashduashduas
        </div>
      </div>
      <!-- End Content -->

  </div>
</div>
    <?php $this->load->view('Layout/footer'); ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"><!-- Select "Logout" below if you are ready to end your current session. -->
          <div align="center">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('logout')?>">Keluar</a>
          </div>
            
          </div>
          
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/chart.js/Chart.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.js'?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/js/sb-admin.min.js'?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url().'assets/js/sb-admin-datatables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/sb-admin-charts.min.js'?>"></script>
  </div>
</body>

</html>

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
        <li class="breadcrumb-item active">Petugas</li>
      </ol>

      <!-- Content -->
      <div>
        <div class="jumbotron">
          <a id="btn-add" class="btn btn-warning btn-sm">Add(+)</a>
          <table class="table table-bordered">

            <tr bgcolor="lightgreen">
              <td>No</td>
              <td>User</td>
              <td>Password</td>
              <td>Action</td>
            </tr>  
            <?php $no=0 ;foreach ($petugas as $rows): $no++?>
               <tr>
                <td><?= $no ?></td>
                 <td><?= $rows->user ?></td>
                 <td><?= $rows->pass ?></td>
                 <td align="center">
                   <a id="<?= $rows->id ?>" class="btn btn-danger btn-sm btn-edit">Edit</a>
                   &nbsp;
                   <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" href="<?= base_url('app/petugasAction/delete/'.$rows->id); ?>" class="btn btn-primary btn-sm">Delete</a>
                 </td>
               </tr>
            <?php endforeach ?>
           
          </table>

        </div>
      </div>
      <!-- End Content -->

  </div>

<!-- Form Modal -->
<form id="form-petugas">
<div id="modal-form-petugas" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4  class="modal-title">Form Petugas</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="act">
        <input type="hidden" name="id">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="user">User</label>
              <input type="text" name="user" class="form-control" placeholder="User">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>
<!-- Form Modal -->
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

    <script type="text/javascript">
      $(document).ready(function() {
        $('#btn-add').on('click', function(event) {
          event.preventDefault();
          $('#modal-form-petugas').modal('show');
          $('#form-petugas')[0].reset();
          $('input[name="act"]').val('insert');
        });

        $('.btn-edit').on('click', function(event) {
          event.preventDefault();
          var id = this.id;
          $.ajax({
            url: '<?= base_url('app/petugasAction/edit'); ?>',
            type: 'POST',
            dataType: 'JSON',
            data: {id: id},
            success: function(x){
              console.log(x);
              $('#modal-form-petugas').modal('show');
              $('input[name="act"]').val('update');
              $.each(x, function(index, val) {
                 $('input[name="'+index+'"]').val(val);
              });
            }
          });
          
        });

        $('#form-petugas').on('submit', function(event) {
          event.preventDefault();
          var act = $('input[name="act"]').val();
          if (act == 'insert')
          {
            $.ajax({
              url: '<?= base_url('app/petugasAction/insert'); ?>',
              type: 'POST',
              dataType: 'JSON',
              data: $(this).serialize(),
              success: function(x){
                console.log(x);
                if (x.info){
                  alert('Data Berhasil di insert');
                  location.reload();
                }
                else
                {
                  alert(x.msg);
                }
              }
            });  
          }
          else
          {
            $.ajax({
              url: '<?= base_url('app/petugasAction/update'); ?>',
              type: 'POST',
              dataType: 'JSON',
              data: $(this).serialize(),
              success: function(x){
                console.log(x);
                if (x.info){
                  alert('Data Berhasil update');
                  location.reload();
                }
                else
                {
                  alert(x.msg);
                }
              }
            });   
          }
          
        });
      });  
    </script>

  </div>
</body>

</html>

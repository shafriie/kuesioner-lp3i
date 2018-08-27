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
        <li class="breadcrumb-item active">Laporan Siswa Prospect</li>
      </ol>

      <!-- Content -->
      <div>
        <div class="jumbotron">
          <!-- <a id="btn-add" class="btn btn-warning btn-sm">Add(+)</a> -->
          <table class="table table-bordered" id="myTable">
            <thead>
            <tr bgcolor="lightgreen">
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Nama Sekolah</th>
              <th>No Telepon</th>
              <th>Setelah Lulus</th>
              <th>Minat Kuliah</th>
              <th>Konsentrasi</th>
              <th>Presenter</th>

            </tr>  
            </thead>
            <tbody>
            <?php $no=0 ;foreach ($laporan as $rows): $no++?>
               <tr>
                <td><?= $no ?></td>
                 <td><?= $rows->nama_lengkap ?></td>
                 <td><?= $rows->jenis_kelamin ?></td>
                 <td><?= $rows->nama_sekolah ?></td>
                 <td><?= $rows->telepon_rumah ?></td>
                 <td><?= $rows->setelah_lulus ?></td>
                 <td><?= $rows->minat_kuliah ?></td>
                 <td><?= $rows->konsentrasi ?></td>
                 <td><?= $rows->presenter ?></td>
               </tr>
            <?php endforeach ?>
           </tbody>
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
        <h4  class="modal-title">Form Sekolah</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="act">
        <input type="hidden" name="id_sekolah">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="user">Nama Sekolah</label>
              <input type="text" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah">
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

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">



    <script type="text/javascript">
      $(document).ready(function() {

        $('#myTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

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
            url: '<?= base_url('app/sekolahAction/edit'); ?>',
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
              url: '<?= base_url('app/sekolahAction/insert'); ?>',
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
              url: '<?= base_url('app/sekolahAction/update'); ?>',
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

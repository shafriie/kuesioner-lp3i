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
        <li class="breadcrumb-item active">Input Kuesioner</li>
      </ol>

      <!-- Content -->
      <div>
        <div class="jumbotron">
          <form method="POST" action="<?= base_url('app/insertKuesioner'); ?>">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <label>Tempat / Tgl Lahir</label>
                    <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                      </div>  
                    </div>
                    <div class="col-md-6">
                      <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>

                    </div>  
                    </div>    
                </div>
                <div class="col-md-6">
                  <label>Jenis Kelamin</label>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <select class="form-control" name="jenis_kelamin" required>
                          <option value="">-- Pilih --</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>  
                    </div>
                    </div>    
                </div>
              </div>
              
              
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat" required></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon_rumah" class="form-control" placeholder="Rumah" required>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>HP/WA</label>
                    <input type="text" name="telepon_wa" class="form-control" placeholder="HP/WA" required>
                  </div>    
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <label>Nama Sekolah</label>
                  <select class="form-control" name="nama_sekolah" required>
                    <option value="">-- Pilih --</option>
                    <?php foreach ($sekolah as $rows): ?>
                      <option value="<?= $rows->nama_sekolah ?>"><?= $rows->nama_sekolah ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="col-md-6">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan_sekolah" placeholder="Jurusan" class="form-control" required>
                </div>
              </div>
            </div>


            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label>Agama</label>
                  <select class="form-control" name="agama" required>  
                    <option value="">-- Pilih --</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option> 
                  </select>  
                </div>

                <div class="col-md-4">
                  <label>Email Facebook</label>
                  <input type="email" name="email_facebook" class="form-control" placeholder="Email Facebook" required>
                </div>

                <div class="col-md-4">
                  <label>Pin BB</label>
                  <input type="text" name="pin_bb" class="form-control" placeholder="Pin BB" required>
                </div>


              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label>Instagram</label>
                  <input type="text" name="instagram" class="form-control" placeholder="Instagram" required>
                </div>

                <div class="col-md-4">
                  <label>Line</label>
                  <input type="text" name="line" class="form-control" placeholder="Line" required>
                </div>

                <div class="col-md-4">
                  <label>Twitter</label>
                  <input type="text" name="twitter" class="form-control" placeholder="Twitter" required>
                </div>


              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label>Nama Orang Tua / Wali</label>
                  <input type="text" name="nama_ortu" class="form-control" placeholder="Nama Orang Tua / Wali" required>
                </div>

                <div class="col-md-4">
                  <label>Pekerjaan</label>
                  <input type="text" name="pekerjaan_ortu" class="form-control" placeholder="Pekerjaan Ortu" required>
                </div>

                <div class="col-md-4">
                  <label>No Telp / HP</label>
                  <input type="text" name="telp_ortu" class="form-control" placeholder="Telepon Ortu" required>
                </div>

              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Rencana Setelah Lulus SMK / SMA....?</label>
                    <select name="setelah_lulus" class="form-control" required>
                      <option value="">-- Pilih --</option>
                      <option value="Kuliah">Kuliah</option>
                      <option value="Kerja">Kerja</option>
                    </select>
                  </div>    
                </div>

                <div class="col-md-6">
                  <label>Presenter</label>
                  <select name="presenter" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php foreach ($presenter as $rows): ?>
                      <option value="<?= $rows->kd_presenter ?>"><?= $rows->nama_presenter ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Apakah kamu berminat kuliah di Politeknik LP3I Jakarta Kampus Kramat Raya....?</label>
                <select name="minat_kuliah" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <option value="Ya">Ya</option>
                  <option value="Ragu-ragu">Ragu-ragu</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Konsentrasi Pilihan D3</label>
                <select name="konsentrasi" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php foreach ($jurusan as $rows): ?>
                    <option value="<?= $rows->kode_jurusan ?>"><?= $rows->nama_jurusan ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>

            <div align="center" class="col-md-12">
              <button type="submit" class="btn btn-info">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
              <a href="<?= base_url('app/kuesioner'); ?>" class="btn btn-warning">Back</a>
            </div>

          </div> <!-- End Row -->
          </form>
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

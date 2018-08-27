<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Pendataan Siswa</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?= base_url('app/dashboard'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <?php if ($this->session->userdata('user') == 'admin'): ?>
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url('app/petugas'); ?>">
              <i class="fa fa-address-book"></i>
              <span class="nav-link-text">Mengelola Data Petugas</span>
            </a>
          </li> 
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url('app/kuesioner'); ?>">
              <i class="fa fa-book"></i>
              <span class="nav-link-text">Mengelola Data Kuesioner</span>
            </a>
          </li>    
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url('app/sekolah'); ?>">
              <i class="fa fa-flag"></i>
              <span class="nav-link-text">Mengelola Data Sekolah</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url('app/jurusan'); ?>">
              <i class="fa fa-laptop"></i>
              <span class="nav-link-text">Mengelola Data Jurusan</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url('app/presenter'); ?>">
              <i class="fa fa-server"></i>
              <span class="nav-link-text">Mengelola Data Presenter</span>
            </a>
          </li>      
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url('app/laporan'); ?>">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Melihat Laporan Siswa</span>
            </a>
          </li>
        <?php else: ?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url('app/kuesioner'); ?>">
              <i class="fa fa-book"></i>
              <span class="nav-link-text">Mengelola Data Kuesioner</span>
            </a>
          </li>    
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url('app/sekolah'); ?>">
              <i class="fa fa-flag"></i>
              <span class="nav-link-text">Mengelola Data Sekolah</span>
            </a>
          </li>
         
         <?php endif ?>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out" ></i>Keluar</a>
        </li>
      </ul>
    </div>
  </nav>
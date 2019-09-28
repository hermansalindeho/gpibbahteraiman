  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="ifgflogo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="Bahtera Iman" style="height: 40px"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        
        <?php /*
        <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
        */?>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="beranda">Beranda <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url(); ?>Beranda/VisiMisiTema/">Visi, Misi, Tema</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Beranda/SuaraGembala/">Suara Gembala</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Beranda/SeputarKita/">Seputar Kita</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Beranda/SalamPresbiter/">Salam Presbiter</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="sbu">SBU<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url(); ?>SBU/RenunganPagi/">Renungan Pagi</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>SBU/RenunganMalam/">Renungan Malam</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="tentang-kami">Tentang Kami <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url(); ?>TentangKami/PHMJ">Pelaksana Harian Majelis Jemaat</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>TentangKami/Presbiter">Presbiter</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>TentangKami/PengurusPelkat">Pengurus Pelkat</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>TentangKami/KorsekPel">Koordinator Sektor</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>TentangKami/Video">Video</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="ibadah">Ibadah <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url(); ?>Ibadah/IbadahMinggu">Ibadah Minggu & Hari Besar</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Ibadah/IbadahWilayah">Ibadah Keluarga</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Ibadah/IbadahPelkat">Ibadah Pelayanan Kategorial</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Ibadah/IbadahPersekutuanDoa">Ibadah Persekutuan Doa</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Ibadah/IbadahPengucapanSukur">Ibadah Pengucapan Sukur</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="pembinaan-kegiatan">Kegiatan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url(); ?>PembinaanKegiatan/Katekisasi">Katekisasi</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>PembinaanKegiatan/PaduanSuara">Latihan Paduan Suara</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>PembinaanKegiatan/SidangRapat">Sidang, Rapat, dan Pertemuan</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="administrasi">Administrasi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url(); ?>Administrasi/InformasiSekretariat">Informasi Sekretariat</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Administrasi/JemaatBaru">Pendaftaran Warga Jemaat Baru</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Administrasi/Baptis">Persyaratan Baptis</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Administrasi/KatekisasiSidi">Persyaratan Katekisasi / Sidi</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Administrasi/Perkawinan">Persyaratan Pemberkatan Perkawinan</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="galeri">Galeri <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url(); ?>Galeri/Photo">Photo</a>
            </li>
          </ul>
        </li>

<?php 
/*        <li><a href="<?php echo base_url(); ?>about">Tentang</a></li>
        <li><a href="#">Kegiatan</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Selanjutnya <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">Daftar Pengkhotbah</a>
            </li>
            <li>
              <a href="#">Ibadah Minggu</a>
            </li>
          </ul>
        </li>
        <li><a href="#">Pembinaan & Kegiatan</a></li>
        <li><a href="#">Kontak</a></li>
        */?>
      </ul>
    </div><!--/.nav-collapse -->
    </div>
</nav>

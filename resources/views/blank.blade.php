@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Admin Area -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin Area</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Roles</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-person-military-to-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Permissions</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-person-circle-exclamation"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>

                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
            <!-- ./col -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          This section is for admin only! careful.
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- User Area -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">User Area</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-md-center">
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>PSKS</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>150</h3>

                      <p>PMKS</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-dots-from-line"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Dunia Usaha yang Melakukan Kesejahteraan Sosial</span>
                      <span class="info-box-number">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-people-group"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Karang Taruna</span>
                      <span class="info-box-number">410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-people-roof"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Keluarga Pioneer</span>
                      <span class="info-box-number">13,648</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-shelter"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Lembaga Kesejahteraan Sosial</span>
                      <span class="info-box-number">93,139</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-arrow-up-from-line"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Lembaga Konsultasi Kesejahteraan Keluarga (LK3)</span>
                      <span class="info-box-number">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-chalkboard"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Pekerja Sosial Masyarakat (PSM)</span>
                      <span class="info-box-number">410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-walking-luggage"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Pekerja Sosial Profesional</span>
                      <span class="info-box-number">13,648</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-military-pointing"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Penyuluh Sosial</span>
                      <span class="info-box-number">93,139</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-digging"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Taruna Siaga Bencana</span>
                      <span class="info-box-number">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-people-carry-box"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Tenaga Kesejahteraan Sosial Kecamatan (TKSK)</span>
                      <span class="info-box-number">410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-hiking"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Wahana Kesejahteraan Sosial Berbasis Masyarakat</span>
                      <span class="info-box-number">13,648</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-solid fa-person-breastfeeding"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Wanita Pemimpin Kesejahteraan Sosial (WPKS)</span>
                      <span class="info-box-number">93,139</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer row justify-content-md-center">
            <div class="col-lg-3 col-6">
                <button type="button" class="btn btn-warning btn-block btn-sm"><i class="fa fa-bell"></i> Ask to be an operator</button>
            </div>
            <div class="col-lg-3 col-6">
                <button type="button" class="btn btn-danger btn-block btn-sm"><i class="fa fa-bell"></i> Ask to be an inspector</button>
            </div>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- Operator Area -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">PSKS</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Dunia Usaha yang Melakukan Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-person-dots-from-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Karang Taruna</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Keluarga Pioneer</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-roof"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Lembaga Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-shelter"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Lembaga Konsultasi Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-person-arrow-up-from-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Pekerja Sosial Masyarakat</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-chalkboard"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Pekerja Sosial Profesional</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-walking-luggage"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Penyuluh Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-military-pointing"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Taruna Siaga Bencana</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-digging"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Tenaga Kesejahteraan Sosial Kecamatan</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-people-carry-box"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Wahana Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-hiking"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Wanita Pemimpin Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-breastfeeding"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Please input the correct data!
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- Inspector Area -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Unchecked PSKS data</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Dunia Usaha yang Melakukan Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-person-dots-from-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Karang Taruna</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Keluarga Pioneer</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-roof"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Lembaga Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-shelter"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Lembaga Konsultasi Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-person-arrow-up-from-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Pekerja Sosial Masyarakat</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-chalkboard"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Pekerja Sosial Profesional</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-walking-luggage"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Penyuluh Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-military-pointing"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Taruna Siaga Bencana</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-digging"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Tenaga Kesejahteraan Sosial Kecamatan</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-people-carry-box"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Wahana Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-hiking"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Wanita Pemimpin Kesejahteraan Sosial</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-solid fa-person-breastfeeding"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Please check the data as soon as possible!
        </div>
        <!-- /.card-footer-->
      </div>
    </section>
    <!-- /.content -->
</div>

@endsection

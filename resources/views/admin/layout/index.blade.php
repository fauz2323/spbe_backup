  @extends('admin.master')
  @section('isi')
      <div class="wrapper">
          <!-- Preloader -->
          <div class="preloader flex-column justify-content-center align-items-center">
              <img class="animation__shake" src="assets/img/favicon.png " alt="AdminLTELogo" height="60" width="60">
          </div>
          <br>
          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                              <div class="inner">
                                  <h3>{{ $artikel }}</h3>

                                  <p>Total Artikel Berita</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-bag"></i>
                              </div>

                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3>{{ $user }}</h3>

                                  <p>Total User</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                              </div>

                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                              <div class="inner">
                                  <h3>{{ $publicLayanan }}</h3>

                                  <p>Layanan Public</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>

                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <h3>{{ $administrasiLayanan }}</h3>

                                  <p>Layanan Administrasi</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-pie-graph"></i>
                              </div>

                          </div>
                      </div>
                      <!-- ./col -->
                  </div>
                  <!-- /.row -->
                  <!-- Main row -->
                  <div class="row">
                      <!-- Left col -->

                      <!-- /.Left col -->
                      <!-- right col (We are only adding the ID to make the widgets sortable)-->
                      <section class="col-lg-5 connectedSortable">

                      </section>
                      <!-- right col -->
                  </div>
                  <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      {{-- footer --}}
  @endsection

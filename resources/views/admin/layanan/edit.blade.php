@extends('admin.master')
@section('isi')
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/img/favicon.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div>
        <br>
        <!-- general form elements -->
        <div class="card-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('layanans.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="NAMA">Nama Layanan</label>
                            <input type="text" class="form-control" value="{{ $layanan->layanan }}" name="layanan"
                                placeholder="Isi Nama Layanan">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Kategory</label>
                            <select class="form-control" name="type" id="exampleFormControlSelect1">
                                <option disabled>Pilih Kategoori</option>
                                <option {{ $layanan->type == 'Public' ? 'selected' : '' }} value="Public">Public</option>
                                <option {{ $layanan->type == 'Administrasi' ? 'selected' : '' }} value="Administrasi">
                                    Administrasi
                                </option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" onclick="myallert()">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card -->



    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        function myallert() {
            swal({
                    title: "Are you sure?",
                    text: "Are you sure that you want to leave this page?",
                    icon: "success",
                    dangerMode: true,
                })
                .then(willDelete => {
                    if (willDelete) {
                        swal("Good Job!", "Anda berhasil booking!", "success");
                    }
                });
        }
    </script>
@endsection

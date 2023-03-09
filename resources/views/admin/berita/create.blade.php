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
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="NAMA">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Isi Nama">
                        </div>
                        <div class="form-group">
                            <label for="InputFile">Isi</label>
                            <textarea name="isi" class="form-control" id="isi" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="InputFile">Penulis</label>
                            <input type="text" name="penulis" class="form-control" name="penulis" placeholder="Isi Nama">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" onclick="myallert()">Tambah</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <!-- /.card -->



    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>


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

        CKEDITOR.replace('isi');
    </script>
@endsection

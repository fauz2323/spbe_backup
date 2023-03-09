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
                    <h3 class="card-title">Edit Visi Misi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('visimisis.update') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="NAMA">Masukan Visi</label>
                            <textarea name="visi" id="visi" cols="30" rows="10">{{ $data->visi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputFile">Masukkan Misi</label>
                            <textarea name="misi" id="misi" cols="30" rows="10">{{ $data->misi }}</textarea>

                            {{-- <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div> --}}
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

        CKEDITOR.replace('visi');
        CKEDITOR.replace('misi');
    </script>
@endsection

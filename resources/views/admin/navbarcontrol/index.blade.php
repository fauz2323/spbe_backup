@extends('admin.master') 
@section('isi')
<div class="wrapper">
	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="assets/img/favicon.png" alt="AdminLTELogo" height="60" width="60">
	</div>
	<br>
		<div class="card-header">
			<h3 class="card-title">Data Kebijakan</h3>
		</div>
		<!-- /.card-header -->
		{{-- <div class="card-body">
			<a href="{{ route('kebijakans.create') }}" class="btn btn-md btn-success mb-3">TAMBAH KEBIJAKAN</a>	<div class="card">
			<table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
				<th>NAMA</th>
				<th>FILE</th>
				<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
					@foreach ($ar_kebijakan as $kbjkn)
			<tr>
				<td>{{ $loop->iteration }}</td>
                <td>{{ $kbjkn->nama }}</td>
                <td>{{ $kbjkn->file }}</td>
			</tr>
			@endforeach
			</tbody>
			</table>
		</div> --}}
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
</script>


@endsection
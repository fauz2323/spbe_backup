@extends('master')

@section('content')
    <!-- ======= About Us Section ======= -->
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Visi SPBE</h2>
            <p>
                {!! $visiMisi->visi !!}
            </p>
        </div>
        <div class="section-header">
            <h2>Misi SPBE</h2>
            <p>
                {!! $visiMisi->misi !!}
            </p>
        </div>
    </div>
@endsection

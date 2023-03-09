@extends('master')
@section('content')
    <div class="container text-left">
        <h3 class="mt-3" align="center">TATA KELOLA SPBE</h3>
        <div>
            <ol class="list-group list-group-numbered">
                @foreach ($tata_kelola as $item)
                    <li class="list-group-item">
                        {{ $item->nama }} <button type="button" class="btn btn-outline-primary">
                            <a href="{{ $item->file }}" target="_blank">KLIK DISINI</button></a>
                    </li>
                @endforeach
                {{-- <li class="list-group-item">
                    ARSITEKTUR SPBE Kondisi eksisting TI <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/15_8Eq7PNsgzid8ML831FYlYMx_yzs_Oc/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    ARSITEKTUR SPBE PROBIS,DATA, INFORMASI DAN APLIKASI <button type="button"
                        class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1skSN3yp-DrxWw1sXI7pbdBIMorlge78e/view?usp=share_link"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    ARSITEKTUR SPBE ARSITEKTUR INFRASTRUKTUR <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1hCGSMQUSyxkQecVF5F7ef6okaE_EbR3G/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    ARSITEKTUR SPBE ARSITEKTUR KEAMANAN <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1f8-zxr6H_ycS8a6ApgN2ptDD1XvNtuoK/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    ARSITEKTUR SPBE LAYANAN, TATA KELOLA, MANAJEMEN TIK <button type="button"
                        class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1H5c__VOMFWFciBgAMpy9Kkn4r88DQ9Cy/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    ARSITEKTUR SPBE PETA RENCANA SPBE <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1EHf7SqlbwKp409JwGt_18mGxoLss-gxM/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li> --}}
            </ol>
        </div>
    </div>
    <br>
@endsection

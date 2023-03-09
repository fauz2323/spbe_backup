@extends('master')
@section('content')
    <div class="container text-left">
        <h3 class="mt-3" align="center">Manajemen SPBE</h3>
        <div>
            <ol class="list-group list-group-numbered">
                @foreach ($data_management as $item)
                    <li class="list-group-item">
                        {{ $item->nama }} <button type="button" class="btn btn-outline-primary">
                            <a href="{{ $item->file }}" target="_blank">KLIK DISINI</button></a>
                    </li>
                @endforeach
                {{-- <li class="list-group-item">
                    PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR 95 TAHUN 2018 <button type="button"
                        class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1uD4NfYAMCmZUPDGaZHJiFjK0fFXvoOIe/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    PERMENPAN-RB NOMOR 59 TAHUN 2020 <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1Pfmm6oDCg86EQxQyyoB91O6JSvzhJc7D/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    KEPMENPAN RB NOMOR 962 TAHUN 2021 <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1vy0V3Dsu2B6f09mTV_qW2tctQkn7GItd/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    PERATURAN BUPATI MADIUN NOMOR 81 TAHUN 2019 <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/12yE96LEVxY5Rjw1Xx26j-RjUMi0bHi_e/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    PERBUP NOMOR 24 TAHUN 2020 <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1qIGAs-eZXS8E3s0hZys8vU1HDTNsfeVc/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    PERBUP NOMOR 46 TAHUN 2020 <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1qIGAs-eZXS8E3s0hZys8vU1HDTNsfeVc/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    PERBUP NOMOR 62 TAHUN 2022 <button type="button" class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1jFaLl_6iP0N85IEZ_R3LUcOi3ONNSRjp/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    KEPUTUSAN BUPATI MADIUN TENTANG TIM KOORDINASI SPBE 2020 <button type="button"
                        class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1yuY317DcbjCZOrbJvyogPDfwgTO3kbZT/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    KEPUTUSAN BUPATI MADIUN TENTANG TIM AUDITOR INTERNAL DAN AUDITEE <button type="button"
                        class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1CQyuuF32GLdphJpLZa7MF-1a0pibcvON/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li>
                <li class="list-group-item">
                    KEPUTUSAN BUPATI MADIUN TENTANG TIM KOORDINASI TAHUN 2021 <button type="button"
                        class="btn btn-outline-primary">
                        <a href="https://drive.google.com/file/d/1qvxTTBsp5wAQdIWPLsLRIC_sUoIakaGv/view?usp=sharing"
                            target="_blank">KLIK DISINI</button></a>
                </li> --}}
            </ol>
        </div>
    </div>
    <br>
@endsection

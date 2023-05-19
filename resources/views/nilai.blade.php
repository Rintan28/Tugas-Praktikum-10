@php
    $nama = "aku siapa?";
    $nilai = 90
@endphp

@if ($nilai > 80)
    @php
        $ket = "LULUS";
    @endphp
@else
    @php
        $ket = "GAGAL";
    @endphp
@endif

Siswa {{$nama}} dinyatakan {{$ket}}
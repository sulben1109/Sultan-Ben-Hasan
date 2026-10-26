@extends('layouts.main')
@section('title', 'Hasil Deteksi - AgriVision Garut')
@section('content')
    <h1>Hasil Deteksi Hama</h1>

    <div class="card">
        <table>
            <tr><th>Lokasi Lahan</th><td>{{ $deteksi->lokasi }}</td></tr>
            <tr><th>Nama Tanaman</th><td>{{ $deteksi->nama_tanaman }}</td></tr>
            <tr><th>Jenis Hama</th><td>{{ $deteksi->jenis_hama }}</td></tr>
            <tr><th>Confidence Score</th><td>{{ $deteksi->confidence_score }}%</td></tr>
            <tr><th>Tingkat Kerusakan Daun</th><td>{{ $deteksi->tingkat_kerusakan }}%</td></tr>
            <tr>
                <th>Status Deteksi</th>
                <td>
                    @if ($status === 'Tidak Pasti')
                        <span class="badge badge-gray">⚠️ Tidak Pasti</span>
                    @elseif ($status === 'Indikasi Hama')
                        <span class="badge badge-yellow">🔍 Indikasi Hama</span>
                    @else
                        <span class="badge badge-red">🚨 Hama Terkonfirmasi</span>
                    @endif
                </td>
            </tr>
            <tr><th>Rekomendasi</th><td>{{ $rekomendasi }}</td></tr>
        </table>
    </div>

    <a class="btn" href="{{ route('deteksi') }}">Input Lagi</a>
    <a class="btn btn-outline" href="{{ route('riwayat') }}">Lihat Riwayat</a>
@endsection

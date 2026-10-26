@extends('layouts.main')
@section('title', 'Riwayat Deteksi - AgriVision Garut')
@section('content')
    <h1>Riwayat Deteksi Hama</h1>

    <div class="card table-wrap">
        <input type="text" id="cari" class="search" placeholder="🔎 Cari lokasi / tanaman / hama / status...">
        <table id="tabel-riwayat">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Lokasi</th>
                    <th>Tanaman</th>
                    <th>Jenis Hama</th>
                    <th>Confidence</th>
                    <th>Kerusakan</th>
                    <th>Status</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($riwayat as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->nama_tanaman }}</td>
                        <td>{{ $item->jenis_hama }}</td>
                        <td>{{ $item->confidence_score }}%</td>
                        <td>{{ $item->tingkat_kerusakan }}%</td>
                        <td>
                            @if ($item->status_deteksi === 'Tidak Pasti')
                                <span class="badge badge-gray">Tidak Pasti</span>
                            @elseif ($item->status_deteksi === 'Indikasi Hama')
                                <span class="badge badge-yellow">Indikasi Hama</span>
                            @else
                                <span class="badge badge-red">Hama Terkonfirmasi</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="8" class="empty">Belum ada data deteksi.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

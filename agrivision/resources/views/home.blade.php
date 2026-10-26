@extends('layouts.main')

@section('title', 'Dashboard - AgriVision Garut')

@section('content')
    <section class="hero">
        <h1>Selamat Datang di AgriVision Garut – Sistem Deteksi Hama Tanaman Berbasis Computer Vision</h1>
        <p>Aplikasi pencatatan hasil deteksi hama untuk membantu Kelompok Tani Makmur memantau serangan hama secara cepat, teratur, dan terdokumentasi.</p>
        <a class="btn" href="{{ route('deteksi') }}">Mulai Input Deteksi</a>
        <a class="btn btn-outline" href="{{ route('riwayat') }}">Lihat Riwayat</a>
    </section>

    <section class="grid">
        <div class="card">
            <h2>🎯 Tujuan Sistem</h2>
            <p>Mempercepat penanganan serangan hama dengan mencatat hasil prediksi model dan memberi rekomendasi otomatis.</p>
        </div>
        <div class="card">
            <h2>🧠 Computer Vision</h2>
            <p>Model EfficientNet-B0 mengklasifikasikan jenis hama dari foto daun beserta nilai confidence score.</p>
        </div>
        <div class="card">
            <h2>📋 Riwayat Terdokumentasi</h2>
            <p>Setiap hasil deteksi tersimpan di database sehingga riwayat serangan mudah dipantau.</p>
        </div>
    </section>
@endsection

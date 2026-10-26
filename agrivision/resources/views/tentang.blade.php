@extends('layouts.main')
@section('title', 'Tentang - AgriVision Garut')

@section('content')
    <h1>Tentang AgriVision Garut</h1>

    <div class="card">
        <h2>Tujuan Sistem</h2>
        <p>AgriVision Garut dibangun untuk mencatat hasil prediksi hama tanaman, menentukan status deteksi, dan memberikan rekomendasi penanganan berdasarkan confidence score.</p>
    </div>
    <div class="card">
        <h2>Lokasi Deteksi</h2>
        <ul>
            <li>Kecamatan Garut Kota</li>
            <li>Kecamatan Tarogong Kaler</li>
            <li>Kecamatan Samarang</li>
        </ul>
    </div>
    <div class="card">
        <h2>Parameter Hasil Deteksi</h2>
        <ul>
            <li>Jenis hama</li>
            <li>Confidence score</li>
            <li>Tingkat kerusakan daun</li>
        </ul>
    </div>
    <div class="card">
        <h2>Model Klasifikasi</h2>
        <p>EfficientNet-B0 &ndash; model klasifikasi citra yang memprediksi jenis hama dari foto daun tanaman. Pada prototipe ini hasil prediksi diinput manual (simulasi).</p>
    </div>
@endsection

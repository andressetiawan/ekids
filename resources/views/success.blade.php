@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/success.css">
@endsection

@section('container')
    <main>
        <div class="success-header">
            <h1>Pendaftaran Berhasil</h1>
            <h2>Terima kasih sudah melakukan pendaftaran Natal Echo Kids!</h2>
        </div>

        <div class="success-section">
            <h1>Nama</h1>
            <p>{{ $data->name }}</p>
        </div>

        <div class="success-section">
            <h1>Jenis Kelamin</h1>
            <p>{{ $data->gender }}</p>
        </div>

        <div class="success-section">
            <h1>Kelas</h1>
            <p>{{ $data->class }}</p>
        </div>

        <div class="success-section">
            <h1>Nomor Tiket</h1>
            <p>EK-{{ $data->id }}</p>
        </div>

        <div class="success-section-footer">
            <a class="btn-download" href={{ "/download/" . $data->id }}>
                    <img src="/assets/download-icon.svg" alt="Download icon">
                    <p>Unduh tiket</p>
            </a>
            <p class="success-section-desc"><span class="desc-required">*</span>Pastikan anda membawa tiket pada tanggal
                <span class="desc-highlight">17
                    Desember 2022</span> ke <span class="desc-highlight">Echo Kids Taman Semanan Indah</span></p>
        </div>
    </main>
@endsection

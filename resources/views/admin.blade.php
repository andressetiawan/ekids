@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="css/admin.css">
@endsection
@section('container')
    <main>
        @if (!is_null(session('isError')) && session('isError'))
            <div class="error">
                <h1>Data tidak ditemukan!</h1>
            </div>
        @endif

        @if (!is_null(session('isError')) && !session('isError'))
            <div class="success">
                <h1>Absensi berhasil!</h1>
            </div>
        @endif

        <form method="POST" action="" class="input-container">
            <h1 class="form-title">Ticket Number</h1>
            @csrf
            <div style="display: flex">
                <h1>EK-</h1>
                <input required name="id" placeholder="Nomor tiket" id="input-ticket" type="text">
            </div>
            <button id="btn-present" type="submit">Absen</button>
        </form>
    </main>
@endsection

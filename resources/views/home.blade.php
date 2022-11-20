@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('container')
    <div class="card-container">
        <div class="card-header">
            <h1 class="card-header-title">Formulir Pendaftaran</h1>
            <h2 class="card-header-subtitle">Natal Echo Kids</h2>
            <div class="card-header-indicator-container">
                <div class="step-indicator"></div>
                <div class="step-indicator disable"></div>
            </div>
        </div>

        <div class="card-body">
            <form action="/" method="post" class="form-container">
                @csrf
                <div class="form-group">
                    <h1 class="form-label-title">Name lengkap <span class="form-required">*</span></h1>
                    <input type="text" name="name" id="form-name-input" placeholder="Masukan nama kamu disini">
                </div>

                <div class="form-group">
                    <h1 class="form-label-title">Jenis kelamin <span class="form-required">*</span></h1>
                    <input type="hidden" name="gender" id="form-gender-input">
                    <div class="form-card-gender-container">
                        <div class="form-card-gender boy">
                            <img src="assets/gender-boy.svg" alt="Gender boy image">
                            <p>Laki-laki</p>
                        </div>
                        <div class="form-card-gender girl">
                            <img src="assets/gender-girl.svg" alt="Gender girl image">
                            <p>Perempuan</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <h1 class="form-label-title">Kelas <span class="form-required">*</span></h1>
                    <select name="class" id="form-kelas-input">
                        <option value="Baby/Playgroup">Baby/Playgroup</option>
                        <option value="TKA">TKA</option>
                        <option value="TKB">TKB</option>
                        <option value="1 SD">1 SD</option>
                        <option value="2 SD">2 SD</option>
                        <option value="3 SD">3 SD</option>
                        <option value="4 SD">4 SD</option>
                        <option value="5 SD">5 SD</option>
                        <option value="6 SD">6 SD</option>
                    </select>
                </div>

                <div class="form-group">
                    <h1 class="form-label-title">Nomor Handphone <span class="form-required">*</span></h1>

                    <div class="phone-category-container">
                        <div class="phone-category-card">
                            <input type="radio" name="phoneCategory" id="form-phone-input" value="Orang tua">
                            <img src="assets/phone-parents.svg" alt="Parent icon">
                            <label for="phone">Orang tua</label>
                        </div>

                        <div class="phone-category-card">
                            <input type="radio" name="phoneCategory" id="form-phone-input" value="Anak">
                            <img src="assets/phone-kids.svg" alt="Kids icon">
                            <label for="phone">Anak</label>
                        </div>
                    </div>
                </div>

                <button type="submit" id="btn-submit">
                    <p>Daftar</p> <img class="btn-icon-arrow" src="/assets/arrow.svg" alt="arrow icon">
                </button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/home.js"></script>
@endsection

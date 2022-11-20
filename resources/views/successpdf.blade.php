<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        @font-face {
            font-family: "Poppins";
            font-weight: normal;
            src: url("./fonts/Poppins-Regular.ttf");
        }

        @font-face {
            font-family: "Poppins";
            font-weight: bold;
            src: url("./fonts/Poppins-Bold.ttf");
        }

        * {
            margin: 0;
            padding: 0;
        }

        .header-tag {
            position: absolute;
            top: 3.75rem;
            background-color: #0054c5;
            color: white;
            padding: .65rem 1.25rem;
            border-radius: 2rem;
            font-weight: bold;
            left: 2.5rem;
        }

        body {
            padding-top: 8.5rem;
            font-family: "Poppins", sans-serif;
            flex-direction: column;
            padding-left: 3rem;
            padding-right: 3rem;
        }

        .image-header {
            border-radius: 50%;
            position: absolute;
            top: 2rem;
            right: 2.5rem;
            width: 5rem;
        }

        .success-header {
            text-align: center;
        }

        .success-header>h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #0054c5;
        }

        .success-header>h2 {
            font-size: 1rem;
            font-weight: normal;
            margin-top: .25rem;
            margin-bottom: 1.25rem;
        }

        .success-section {
            margin-bottom: 1rem;
        }

        .success-section>p {
            width: 20rem;
        }

        .success-section>h1 {
            font-size: 1rem;
            color: #0054c5;
        }

        .desc-required {
            color: red;
        }

        .desc-highlight {
            font-weight: bold;
        }

        .success-section-footer>h1 {
            margin-top: 3.5rem;
            font-size: 1rem;
            color: #0054c5;
        }

        .success-section-desc {
            margin-left: .5rem;
            margin-top: .5rem;
            font-size: .75rem;
        }

        .syarat-ketentuan-container {
            margin-left: 2rem;
            line-height: 1.25rem;
            font-size: .85rem;
            margin-top: .5rem;
        }

        .section-left {
            position: relative;
            top: 3rem;
            left: 20rem;
        }

        .barcode-img {
            position: absolute;
        }

        .section-right {
            position: relative;
            margin-top: 7.5rem;
            left: 2.25rem;
        }

        .section-body {
            margin-top: 2.5rem;
        }
    </style>
</head>

<body>
    <main>
        <div class="success-header">
            <h1 class="success-header-title">Tiket Natal Echo Kids</h1>
            <h2>Terima kasih sudah melakukan pendaftaran Natal Echo Kids!</h2>
            <img class="image-header" src="{{ public_path('assets/icon.jpeg') }}" alt="Echo kids">
            <div class="header-tag">
                <p>{{ 'Tiket No: EK-' . $data->id }}</p>
            </div>
        </div>

        <div class="section-body">
            <img class="barcode-img"
                src={{ 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https%3A%2F%2Fechokids.my.id/verify/' . $url . '&choe=UTF-8' }}
                title="Link to Ticket" />

            <div class="section-left">
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
            </div>

            <div class="section-right">
                <div class="success-section">
                    <h1>Tempat</h1>
                    <p>GBI Ecclesia Taman Semanan Indah Jl. Dharma Pratama Blok NA/1, Jl. Taman Semanan Indah</p>
                </div>
                <div class="success-section">
                    <h1>Tanggal</h1>
                    <p>17 Desember 2022</p>
                </div>
                <div class="success-section">
                    <h1>Waktu</h1>
                    <p>14.00 (2 Siang)</p>
                </div>
            </div>
        </div>
        <div class="success-section-footer">
            <h1>Syarat dan ketentuan</h1>
            <p class="success-section-desc"><span class="desc-required">*</span>Pastikan anda membawa tiket pada tanggal
                <span class="desc-highlight">17
                    Desember 2022</span> ke <span class="desc-highlight">Echo Kids Taman Semanan Indah</span>
            </p>
            <ol class="syarat-ketentuan-container">
                <li>Wajib menggunakan masker pada saat beribadah</li>
                <li>Pakai baju terbaik adik-adik</li>
                <li>Siapkan hati dan semangat beribadah</li>
                <li>Dilarang makan, ngobrol, dan bermain gadget saat ibadah berlangsung</li>
                <li>Tunjukan tiket ini ke kakak pembina</li>
            </ol>
        </div>
    </main>
</body>

</html>
